import colour.plotting as cpl
# import matplotlib.pyplot as plt
# plt.scatter(0.5,0.5, c='red')
# plt.show() 

# A = SDS_ILLUMINANTS["A"]
# D65 = SDS_ILLUMINANTS["D65"]
# cpl.plot_sds_in_chromaticity_diagram_CIE1976UCS([SDS_ILLUMINANTS["A"], SDS_ILLUMINANTS["D65"]])
cpl.plot_chromaticity_diagram_CIE1976UCS(standalone=False)


# cpl.render()
cpl.render(
        standalone=True,
        bounding_box=(-0.1, 0.9, -0.1, 0.9),
        x_tighten=True,
        y_tighten=True,
        filename="CIE1976UCS_diagram.png")
