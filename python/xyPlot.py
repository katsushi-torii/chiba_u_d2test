import colour
import numpy as np
import matplotlib.pyplot as plt
colour.plotting.colour_style()

def deGumma(data):
    sdata = data / 255;
    if (sdata <= 0.04045):
        sdata = sdata / 12.92;
    else:
        sdata = ((sdata + 0.055) / 1.055)**2.4
    return sdata;

def scale_sRGB(sRGB):
    return np.array([deGumma(sRGB[0]), deGumma(sRGB[1]), deGumma(sRGB[2])])

def plot_sRGB_to_chromaticity_diagram_CIE1931(sRGB_list):
    # colour.plotting.plot_chromaticity_diagram_CIE1931(standalone=False)
    colour.plotting.plot_RGB_colourspaces_in_chromaticity_diagram_CIE1931(['sRGB'], standalone=False, diagram_opacity=0.5)

    for i, _ in enumerate(sRGB_list): 
        sRGB = scale_sRGB(sRGB_list[i])
        XYZ = colour.sRGB_to_XYZ(sRGB)
        xy = colour.XYZ_to_xy(XYZ)
        x, y = xy
        plt.plot(x, y, 'o-', color='white')

        # Annotating the plot.
        plt.annotate("sRGB"+str(i+1),
                    xy=xy,
                    xytext=(-50, 30),
                    textcoords='offset points',
                    arrowprops=dict(arrowstyle='->', connectionstyle='arc3, rad=-0.2'))

    # Displaying the plot.
    colour.plotting.render(
        standalone=True,
        limits=(-0.1, 0.9, -0.1, 0.9),
        x_tighten=True,
        y_tighten=True)


sRGB1 = [255, 0, 0]
sRGB2 = [255, 50, 50]
sRGB3 = [255, 30, 30]
sRGB4 = [255, 50, 0]
sRGB5 = [255, 80, 0]
sRGB6 = [255, 0, 50]
sRGB_list = [sRGB1, sRGB2, sRGB3, sRGB4, sRGB5, sRGB6]
plot_sRGB_to_chromaticity_diagram_CIE1931(sRGB_list)
