from setuptools import setup

VERSION = "0.0.1"

def readme():
    with open("README.md") as f:
        return f.read()

setup(
    name="create_test_relatory_template",
    version=VERSION,
    description="Creates a relatory template to document the tests results",
    long_description_content_type="text/markdown",
    long_description=readme(),
    keywords="relatory performance test programming",
    author="Danilo Silva",
    author_email="contact@danilocgsilva.me",
    packages=["create_test_relatory_template"],
    entry_points={"console_scripts": ["reltemplate=create_test_relatory_template.__main__:main"],},
    include_package_data=True
)

