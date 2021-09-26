<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 此结构体 (Component) 用于描述控件属性。
 *
 * @method string getComponentId() 获取控件编号

注：
当GenerateMode=3时，通过"^"来决定是否使用关键字整词匹配能力。
例：
当GenerateMode=3时，如果传入关键字"^甲方签署^"，则会在PDF文件中有且仅有"甲方签署"关键字的地方进行对应操作。
如传入的关键字为"甲方签署"，则PDF文件中每个出现关键字的位置都会执行相应操作。

创建控件时，此值为空
查询时返回完整结构
 * @method void setComponentId(string $ComponentId) 设置控件编号

注：
当GenerateMode=3时，通过"^"来决定是否使用关键字整词匹配能力。
例：
当GenerateMode=3时，如果传入关键字"^甲方签署^"，则会在PDF文件中有且仅有"甲方签署"关键字的地方进行对应操作。
如传入的关键字为"甲方签署"，则PDF文件中每个出现关键字的位置都会执行相应操作。

创建控件时，此值为空
查询时返回完整结构
 * @method string getComponentType() 获取如果是Component控件类型，则可选的字段为：
TEXT - 普通文本控件；
DATE - 普通日期控件；跟TEXT相比会有校验逻辑
如果是SignComponent控件类型，则可选的字段为
SIGN_SEAL - 签署印章控件；
SIGN_DATE - 签署日期控件；
SIGN_SIGNATURE - 用户签名控件；
SIGN_PERSONAL_SEAL - 个人签署印章控件；

表单域的控件不能作为印章和签名控件
 * @method void setComponentType(string $ComponentType) 设置如果是Component控件类型，则可选的字段为：
TEXT - 普通文本控件；
DATE - 普通日期控件；跟TEXT相比会有校验逻辑
如果是SignComponent控件类型，则可选的字段为
SIGN_SEAL - 签署印章控件；
SIGN_DATE - 签署日期控件；
SIGN_SIGNATURE - 用户签名控件；
SIGN_PERSONAL_SEAL - 个人签署印章控件；

表单域的控件不能作为印章和签名控件
 * @method string getComponentName() 获取控件简称
 * @method void setComponentName(string $ComponentName) 设置控件简称
 * @method boolean getComponentRequired() 获取定义控件是否为必填项，默认为false
 * @method void setComponentRequired(boolean $ComponentRequired) 设置定义控件是否为必填项，默认为false
 * @method integer getFileIndex() 获取控件所属文件的序号 (文档中文件的排列序号)
 * @method void setFileIndex(integer $FileIndex) 设置控件所属文件的序号 (文档中文件的排列序号)
 * @method string getGenerateMode() 获取控件生成的方式：
NORMAL - 普通控件
FIELD - 表单域
KEYWORD - 关键字
 * @method void setGenerateMode(string $GenerateMode) 设置控件生成的方式：
NORMAL - 普通控件
FIELD - 表单域
KEYWORD - 关键字
 * @method float getComponentWidth() 获取参数控件宽度，默认100，单位px
表单域和关键字转换控件不用填
 * @method void setComponentWidth(float $ComponentWidth) 设置参数控件宽度，默认100，单位px
表单域和关键字转换控件不用填
 * @method float getComponentHeight() 获取参数控件高度，默认100，单位px
表单域和关键字转换控件不用填
 * @method void setComponentHeight(float $ComponentHeight) 设置参数控件高度，默认100，单位px
表单域和关键字转换控件不用填
 * @method integer getComponentPage() 获取参数控件所在页码
 * @method void setComponentPage(integer $ComponentPage) 设置参数控件所在页码
 * @method float getComponentPosX() 获取参数控件X位置，单位px
 * @method void setComponentPosX(float $ComponentPosX) 设置参数控件X位置，单位px
 * @method float getComponentPosY() 获取参数控件Y位置，单位px
 * @method void setComponentPosY(float $ComponentPosY) 设置参数控件Y位置，单位px
 * @method string getComponentExtra() 获取参数控件样式，json格式表述
不同类型的控件会有部分非通用参数
TEXT控件可以指定字体
例如：{"FontSize":12}
 * @method void setComponentExtra(string $ComponentExtra) 设置参数控件样式，json格式表述
不同类型的控件会有部分非通用参数
TEXT控件可以指定字体
例如：{"FontSize":12}
 * @method string getComponentValue() 获取印章 ID，传参 DEFAULT_COMPANY_SEAL 表示使用默认印章。
控件填入内容，印章控件里面，如果是手写签名内容为PNG图片格式的base64编码
 * @method void setComponentValue(string $ComponentValue) 设置印章 ID，传参 DEFAULT_COMPANY_SEAL 表示使用默认印章。
控件填入内容，印章控件里面，如果是手写签名内容为PNG图片格式的base64编码
 * @method integer getComponentDateFontSize() 获取日期签署控件的字号，默认为 12

签署区日期控件会转换成图片格式并带存证，需要通过字体决定图片大小
 * @method void setComponentDateFontSize(integer $ComponentDateFontSize) 设置日期签署控件的字号，默认为 12

签署区日期控件会转换成图片格式并带存证，需要通过字体决定图片大小
 * @method string getDocumentId() 获取控件所属文档的Id, 模块相关接口为空值
 * @method void setDocumentId(string $DocumentId) 设置控件所属文档的Id, 模块相关接口为空值
 * @method string getComponentDescription() 获取控件描述
 * @method void setComponentDescription(string $ComponentDescription) 设置控件描述
 */
class Component extends AbstractModel
{
    /**
     * @var string 控件编号

注：
当GenerateMode=3时，通过"^"来决定是否使用关键字整词匹配能力。
例：
当GenerateMode=3时，如果传入关键字"^甲方签署^"，则会在PDF文件中有且仅有"甲方签署"关键字的地方进行对应操作。
如传入的关键字为"甲方签署"，则PDF文件中每个出现关键字的位置都会执行相应操作。

创建控件时，此值为空
查询时返回完整结构
     */
    public $ComponentId;

    /**
     * @var string 如果是Component控件类型，则可选的字段为：
TEXT - 普通文本控件；
DATE - 普通日期控件；跟TEXT相比会有校验逻辑
如果是SignComponent控件类型，则可选的字段为
SIGN_SEAL - 签署印章控件；
SIGN_DATE - 签署日期控件；
SIGN_SIGNATURE - 用户签名控件；
SIGN_PERSONAL_SEAL - 个人签署印章控件；

表单域的控件不能作为印章和签名控件
     */
    public $ComponentType;

    /**
     * @var string 控件简称
     */
    public $ComponentName;

    /**
     * @var boolean 定义控件是否为必填项，默认为false
     */
    public $ComponentRequired;

    /**
     * @var integer 控件所属文件的序号 (文档中文件的排列序号)
     */
    public $FileIndex;

    /**
     * @var string 控件生成的方式：
NORMAL - 普通控件
FIELD - 表单域
KEYWORD - 关键字
     */
    public $GenerateMode;

    /**
     * @var float 参数控件宽度，默认100，单位px
表单域和关键字转换控件不用填
     */
    public $ComponentWidth;

    /**
     * @var float 参数控件高度，默认100，单位px
表单域和关键字转换控件不用填
     */
    public $ComponentHeight;

    /**
     * @var integer 参数控件所在页码
     */
    public $ComponentPage;

    /**
     * @var float 参数控件X位置，单位px
     */
    public $ComponentPosX;

    /**
     * @var float 参数控件Y位置，单位px
     */
    public $ComponentPosY;

    /**
     * @var string 参数控件样式，json格式表述
不同类型的控件会有部分非通用参数
TEXT控件可以指定字体
例如：{"FontSize":12}
     */
    public $ComponentExtra;

    /**
     * @var string 印章 ID，传参 DEFAULT_COMPANY_SEAL 表示使用默认印章。
控件填入内容，印章控件里面，如果是手写签名内容为PNG图片格式的base64编码
     */
    public $ComponentValue;

    /**
     * @var integer 日期签署控件的字号，默认为 12

签署区日期控件会转换成图片格式并带存证，需要通过字体决定图片大小
     */
    public $ComponentDateFontSize;

    /**
     * @var string 控件所属文档的Id, 模块相关接口为空值
     */
    public $DocumentId;

    /**
     * @var string 控件描述
     */
    public $ComponentDescription;

    /**
     * @param string $ComponentId 控件编号

注：
当GenerateMode=3时，通过"^"来决定是否使用关键字整词匹配能力。
例：
当GenerateMode=3时，如果传入关键字"^甲方签署^"，则会在PDF文件中有且仅有"甲方签署"关键字的地方进行对应操作。
如传入的关键字为"甲方签署"，则PDF文件中每个出现关键字的位置都会执行相应操作。

创建控件时，此值为空
查询时返回完整结构
     * @param string $ComponentType 如果是Component控件类型，则可选的字段为：
TEXT - 普通文本控件；
DATE - 普通日期控件；跟TEXT相比会有校验逻辑
如果是SignComponent控件类型，则可选的字段为
SIGN_SEAL - 签署印章控件；
SIGN_DATE - 签署日期控件；
SIGN_SIGNATURE - 用户签名控件；
SIGN_PERSONAL_SEAL - 个人签署印章控件；

表单域的控件不能作为印章和签名控件
     * @param string $ComponentName 控件简称
     * @param boolean $ComponentRequired 定义控件是否为必填项，默认为false
     * @param integer $FileIndex 控件所属文件的序号 (文档中文件的排列序号)
     * @param string $GenerateMode 控件生成的方式：
NORMAL - 普通控件
FIELD - 表单域
KEYWORD - 关键字
     * @param float $ComponentWidth 参数控件宽度，默认100，单位px
表单域和关键字转换控件不用填
     * @param float $ComponentHeight 参数控件高度，默认100，单位px
表单域和关键字转换控件不用填
     * @param integer $ComponentPage 参数控件所在页码
     * @param float $ComponentPosX 参数控件X位置，单位px
     * @param float $ComponentPosY 参数控件Y位置，单位px
     * @param string $ComponentExtra 参数控件样式，json格式表述
不同类型的控件会有部分非通用参数
TEXT控件可以指定字体
例如：{"FontSize":12}
     * @param string $ComponentValue 印章 ID，传参 DEFAULT_COMPANY_SEAL 表示使用默认印章。
控件填入内容，印章控件里面，如果是手写签名内容为PNG图片格式的base64编码
     * @param integer $ComponentDateFontSize 日期签署控件的字号，默认为 12

签署区日期控件会转换成图片格式并带存证，需要通过字体决定图片大小
     * @param string $DocumentId 控件所属文档的Id, 模块相关接口为空值
     * @param string $ComponentDescription 控件描述
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ComponentId",$param) and $param["ComponentId"] !== null) {
            $this->ComponentId = $param["ComponentId"];
        }

        if (array_key_exists("ComponentType",$param) and $param["ComponentType"] !== null) {
            $this->ComponentType = $param["ComponentType"];
        }

        if (array_key_exists("ComponentName",$param) and $param["ComponentName"] !== null) {
            $this->ComponentName = $param["ComponentName"];
        }

        if (array_key_exists("ComponentRequired",$param) and $param["ComponentRequired"] !== null) {
            $this->ComponentRequired = $param["ComponentRequired"];
        }

        if (array_key_exists("FileIndex",$param) and $param["FileIndex"] !== null) {
            $this->FileIndex = $param["FileIndex"];
        }

        if (array_key_exists("GenerateMode",$param) and $param["GenerateMode"] !== null) {
            $this->GenerateMode = $param["GenerateMode"];
        }

        if (array_key_exists("ComponentWidth",$param) and $param["ComponentWidth"] !== null) {
            $this->ComponentWidth = $param["ComponentWidth"];
        }

        if (array_key_exists("ComponentHeight",$param) and $param["ComponentHeight"] !== null) {
            $this->ComponentHeight = $param["ComponentHeight"];
        }

        if (array_key_exists("ComponentPage",$param) and $param["ComponentPage"] !== null) {
            $this->ComponentPage = $param["ComponentPage"];
        }

        if (array_key_exists("ComponentPosX",$param) and $param["ComponentPosX"] !== null) {
            $this->ComponentPosX = $param["ComponentPosX"];
        }

        if (array_key_exists("ComponentPosY",$param) and $param["ComponentPosY"] !== null) {
            $this->ComponentPosY = $param["ComponentPosY"];
        }

        if (array_key_exists("ComponentExtra",$param) and $param["ComponentExtra"] !== null) {
            $this->ComponentExtra = $param["ComponentExtra"];
        }

        if (array_key_exists("ComponentValue",$param) and $param["ComponentValue"] !== null) {
            $this->ComponentValue = $param["ComponentValue"];
        }

        if (array_key_exists("ComponentDateFontSize",$param) and $param["ComponentDateFontSize"] !== null) {
            $this->ComponentDateFontSize = $param["ComponentDateFontSize"];
        }

        if (array_key_exists("DocumentId",$param) and $param["DocumentId"] !== null) {
            $this->DocumentId = $param["DocumentId"];
        }

        if (array_key_exists("ComponentDescription",$param) and $param["ComponentDescription"] !== null) {
            $this->ComponentDescription = $param["ComponentDescription"];
        }
    }
}
