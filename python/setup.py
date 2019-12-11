# coding: utf-8

"""
    Robolytix

    Robolytix is the key online analytic and monitoring tool for Robotic Process Automation using Sonar technology to evaluate, audit, monitor and improve performance of robots operating in any application, RPA platform or custom solution. Manage your RPA projects effectively with exact KPIs. Visualise your whole process at one place.  # noqa: E501

"""

from setuptools import setup, find_packages  # noqa: H301

NAME = "robolytix_client"
VERSION = "1.0.1"
# To install the library, run the following
#
# python setup.py install
#
# prerequisite: setuptools
# http://pypi.python.org/pypi/setuptools

REQUIRES = ["urllib3 >= 1.15", "six >= 1.10", "certifi", "python-dateutil"]

setup(
    name=NAME,
    version=VERSION,
    description="Robolytix",
    author_email="",
    url="",
    keywords=["Client", "Robolytix"],
    install_requires=REQUIRES,
    packages=find_packages(),
    include_package_data=True,
    long_description="""\
    Robolytix is the key online analytic and monitoring tool for Robotic Process Automation using Sonar technology to evaluate, audit, monitor and improve performance of robots operating in any application, RPA platform or custom solution. Manage your RPA projects effectively with exact KPIs. Visualise your whole process at one place.  # noqa: E501
    """
)
