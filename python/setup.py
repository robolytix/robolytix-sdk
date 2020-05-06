# coding: utf-8

"""
    Setup script for robolytix

    Robolytix is the key online analytic and monitoring tool for Robotic Process Automation using Sonar technology to evaluate, audit, monitor and improve performance of robots operating in any application, RPA platform or custom solution. Manage your RPA projects effectively with exact KPIs. Visualise your whole process at one place.

"""

import setuptools

with open("README.md", "r") as fh:
    long_description = fh.read()

setuptools.setup(
    name="robolytix",
    version="0.1.1",
    author="Robolytix.com",
    author_email="info@robolytix.com",
    description="Robolytix is the key online analytic and monitoring tool for Business / Robotic Process Automation.",
    long_description=long_description,
    long_description_content_type="text/markdown",
    url="https://github.com/robolytix/robolytix-sdk/",
    keywords=["Client", "Robolytix"],
    packages=setuptools.find_packages(),
    classifiers=[
        "Programming Language :: Python :: 3",
        "License :: OSI Approved :: MIT License",
        "Operating System :: OS Independent",
        "Topic :: Home Automation",
        "Topic :: System :: Monitoring",
        "Topic :: Software Development :: Libraries :: Python Modules",
        "Intended Audience :: Developers",
        "Intended Audience :: Information Technology",
    ],
    python_requires='>=3.4',
)
