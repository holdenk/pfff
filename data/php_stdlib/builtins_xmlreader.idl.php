<?php
// THIS IS AUTOGENERATED BY builtins_php.ml
class XMLReader {
const NONE = 0;
const ELEMENT = 0;
const ATTRIBUTE = 0;
const TEXT = 0;
const CDATA = 0;
const ENTITY_REF = 0;
const ENTITY = 0;
const PI = 0;
const COMMENT = 0;
const DOC = 0;
const DOC_TYPE = 0;
const DOC_FRAGMENT = 0;
const NOTATION = 0;
const WHITESPACE = 0;
const SIGNIFICANT_WHITESPACE = 0;
const END_ELEMENT = 0;
const END_ENTITY = 0;
const XML_DECLARATION = 0;
const LOADDTD = 0;
const DEFAULTATTRS = 0;
const VALIDATE = 0;
const SUBST_ENTITIES = 0;
 function __construct() { }
 function open($uri, $encoding = null_string, $options = 0) { }
 function XML($source, $encoding = null_string, $options = 0) { }
 function close() { }
 function read() { }
 function next($localname = null_string) { }
 function readString() { }
 function readInnerXML() { }
 function readOuterXML() { }
 function moveToNextAttribute() { }
 function getAttribute($name) { }
 function getAttributeNo($index) { }
 function getAttributeNs($name, $namespaceURI) { }
 function moveToAttribute($name) { }
 function moveToAttributeNo($index) { }
 function moveToAttributeNs($name, $namespaceURI) { }
 function moveToElement() { }
 function moveToFirstAttribute() { }
 function isValid() { }
 function expand() { }
 function __get($name) { }
 function getParserProperty($property) { }
 function lookupNamespace($prefix) { }
 function setSchema($source) { }
 function setParserProperty($property, $value) { }
 function setRelaxNGSchema($filename) { }
 function setRelaxNGSchemaSource($source) { }
}