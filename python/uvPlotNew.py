import matplotlib.pyplot as plt
import numpy as np
import colour
 
samples = 258
xlim = (0, 1)
ylim = (0, 1)
 
wvl = np.arange(420, 700, 5)
wvl_XYZ = colour.wavelength_to_XYZ(wvl)
wvl_uv = colour.Luv_to_uv(colour.XYZ_to_Luv(wvl_XYZ))
wvl_pts = wvl_uv * samples
 
u = np.linspace(xlim[0], xlim[1], samples)
v = np.linspace(ylim[0], ylim[1], samples)
uu, vv = np.meshgrid(u, v)
 
# stack u and v for vectorized computations
uuvv = np.stack((vv,uu), axis=2)
 
# map -> xy -> XYZ -> sRGB
xy = colour.Luv_uv_to_xy(uuvv)
xyz = colour.xy_to_XYZ(xy)
dat = colour.XYZ_to_sRGB(xyz)
# dat = colour.normalise_maximum(dat, axis=-1)
 
# now make an alpha/transparency mask to hide the background
# and flip u,v axes because of column-major symantics
alpha = np.ones((samples, samples)) # * wvl_mask
dat = np.swapaxes(np.dstack((dat, alpha)), 0, 1)
 
# lastly, duplicate the lowest wavelength so that the boundary line is closed
wvl_uv = np.vstack((wvl_uv, wvl_uv[0,:]))
 
fig, ax = plt.subplots(figsize=(5,5))
ax.imshow(dat,
         extent=[xlim[0], xlim[1], ylim[0], ylim[1]],
         interpolation='None',
         origin='lower')
 
ax.set(xlim=(0, 0.7), xlabel='CIE u\'',
       ylim=(0, 0.7), ylabel='CIE v\'')
ax.plot(wvl_uv[:,0], wvl_uv[:,1], c='0', lw=3)

plt.scatter(0.5,0.5,c='black')

plt.show()