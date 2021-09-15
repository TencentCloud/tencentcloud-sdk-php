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
namespace TencentCloud\Essbasic\V20201222\Models;
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
 * @method void setComponentId(string $ComponentId) 设置控件编号

注：
当GenerateMode=3时，通过"^"来决定是否使用关键字整词匹配能力。
例：
当GenerateMode=3时，如果传入关键字"^甲方签署^"，则会在PDF文件中有且仅有"甲方签署"关键字的地方进行对应操作。
如传入的关键字为"甲方签署"，则PDF文件中每个出现关键字的位置都会执行相应操作。
 * @method string getComponentType() 获取如果是Component控件类型，则可选的字段为：
TEXT - 普通文本控件；
DATE - 普通日期控件；
SELECT- 勾选框控件；
如果是SignComponent控件类型，则可选的字段为
SIGN_SEAL- 签署印章控件；
SIGN_DATE- 签署日期控件；
SIGN_SIGNATURE - 用户签名控件；
 * @method void setComponentType(string $ComponentType) 设置如果是Component控件类型，则可选的字段为：
TEXT - 普通文本控件；
DATE - 普通日期控件；
SELECT- 勾选框控件；
如果是SignComponent控件类型，则可选的字段为
SIGN_SEAL- 签署印章控件；
SIGN_DATE- 签署日期控件；
SIGN_SIGNATURE - 用户签名控件；
 * @method string getComponentName() 获取控件名称
 * @method void setComponentName(string $ComponentName) 设置控件名称
 * @method boolean getComponentRequired() 获取定义控件是否为必填项，默认为false
 * @method void setComponentRequired(boolean $ComponentRequired) 设置定义控件是否为必填项，默认为false
 * @method integer getFileIndex() 获取控件所属文件的序号 (模板中的resourceId排列序号)
 * @method void setFileIndex(integer $FileIndex) 设置控件所属文件的序号 (模板中的resourceId排列序号)
 * @method integer getGenerateMode() 获取控件生成的方式：
0 - 普通控件
1 - 表单域
2 - html 控件
3 - 关键字
 * @method void setGenerateMode(integer $GenerateMode) 设置控件生成的方式：
0 - 普通控件
1 - 表单域
2 - html 控件
3 - 关键字
 * @method float getComponentWidth() 获取参数控件宽度，单位px
 * @method void setComponentWidth(float $ComponentWidth) 设置参数控件宽度，单位px
 * @method float getComponentHeight() 获取参数控件高度，单位px
 * @method void setComponentHeight(float $ComponentHeight) 设置参数控件高度，单位px
 * @method integer getComponentPage() 获取参数控件所在页码
 * @method void setComponentPage(integer $ComponentPage) 设置参数控件所在页码
 * @method float getComponentPosX() 获取参数控件X位置，单位px
 * @method void setComponentPosX(float $ComponentPosX) 设置参数控件X位置，单位px
 * @method float getComponentPosY() 获取参数控件Y位置，单位px
 * @method void setComponentPosY(float $ComponentPosY) 设置参数控件Y位置，单位px
 * @method string getComponentExtra() 获取参数控件样式
 * @method void setComponentExtra(string $ComponentExtra) 设置参数控件样式
 * @method string getComponentValue() 获取印章ID，如果是手写签名则为jpg或png格式的base64图片

SIGN_SEAL控件,可以用ORG_DEFAULT_SEAL表示主企业的默认印章
SIGN_SEAL控件,可以用SUBORG_DEFAULT_SEAL表示子企业的默认印章
SIGN_SEAL控件,可以用USER_DEFAULT_SEAL表示个人默认印章
 * @method void setComponentValue(string $ComponentValue) 设置印章ID，如果是手写签名则为jpg或png格式的base64图片

SIGN_SEAL控件,可以用ORG_DEFAULT_SEAL表示主企业的默认印章
SIGN_SEAL控件,可以用SUBORG_DEFAULT_SEAL表示子企业的默认印章
SIGN_SEAL控件,可以用USER_DEFAULT_SEAL表示个人默认印章
 * @method integer getSealOperate() 获取如果是SIGN_SEAL类型的签署控件, 参数标识H5签署界面是否在该签署区上进行放置展示, 1为放置,其他为不放置
 * @method void setSealOperate(integer $SealOperate) 设置如果是SIGN_SEAL类型的签署控件, 参数标识H5签署界面是否在该签署区上进行放置展示, 1为放置,其他为不放置
 * @method string getGenerateExtra() 获取不同GenerateMode对应的额外信息
 * @method void setGenerateExtra(string $GenerateExtra) 设置不同GenerateMode对应的额外信息
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
     */
    public $ComponentId;

    /**
     * @var string 如果是Component控件类型，则可选的字段为：
TEXT - 普通文本控件；
DATE - 普通日期控件；
SELECT- 勾选框控件；
如果是SignComponent控件类型，则可选的字段为
SIGN_SEAL- 签署印章控件；
SIGN_DATE- 签署日期控件；
SIGN_SIGNATURE - 用户签名控件；
     */
    public $ComponentType;

    /**
     * @var string 控件名称
     */
    public $ComponentName;

    /**
     * @var boolean 定义控件是否为必填项，默认为false
     */
    public $ComponentRequired;

    /**
     * @var integer 控件所属文件的序号 (模板中的resourceId排列序号)
     */
    public $FileIndex;

    /**
     * @var integer 控件生成的方式：
0 - 普通控件
1 - 表单域
2 - html 控件
3 - 关键字
     */
    public $GenerateMode;

    /**
     * @var float 参数控件宽度，单位px
     */
    public $ComponentWidth;

    /**
     * @var float 参数控件高度，单位px
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
     * @var string 参数控件样式
     */
    public $ComponentExtra;

    /**
     * @var string 印章ID，如果是手写签名则为jpg或png格式的base64图片

SIGN_SEAL控件,可以用ORG_DEFAULT_SEAL表示主企业的默认印章
SIGN_SEAL控件,可以用SUBORG_DEFAULT_SEAL表示子企业的默认印章
SIGN_SEAL控件,可以用USER_DEFAULT_SEAL表示个人默认印章
     */
    public $ComponentValue;

    /**
     * @var integer 如果是SIGN_SEAL类型的签署控件, 参数标识H5签署界面是否在该签署区上进行放置展示, 1为放置,其他为不放置
     */
    public $SealOperate;

    /**
     * @var string 不同GenerateMode对应的额外信息
     */
    public $GenerateExtra;

    /**
     * @param string $ComponentId 控件编号

注：
当GenerateMode=3时，通过"^"来决定是否使用关键字整词匹配能力。
例：
当GenerateMode=3时，如果传入关键字"^甲方签署^"，则会在PDF文件中有且仅有"甲方签署"关键字的地方进行对应操作。
如传入的关键字为"甲方签署"，则PDF文件中每个出现关键字的位置都会执行相应操作。
     * @param string $ComponentType 如果是Component控件类型，则可选的字段为：
TEXT - 普通文本控件；
DATE - 普通日期控件；
SELECT- 勾选框控件；
如果是SignComponent控件类型，则可选的字段为
SIGN_SEAL- 签署印章控件；
SIGN_DATE- 签署日期控件；
SIGN_SIGNATURE - 用户签名控件；
     * @param string $ComponentName 控件名称
     * @param boolean $ComponentRequired 定义控件是否为必填项，默认为false
     * @param integer $FileIndex 控件所属文件的序号 (模板中的resourceId排列序号)
     * @param integer $GenerateMode 控件生成的方式：
0 - 普通控件
1 - 表单域
2 - html 控件
3 - 关键字
     * @param float $ComponentWidth 参数控件宽度，单位px
     * @param float $ComponentHeight 参数控件高度，单位px
     * @param integer $ComponentPage 参数控件所在页码
     * @param float $ComponentPosX 参数控件X位置，单位px
     * @param float $ComponentPosY 参数控件Y位置，单位px
     * @param string $ComponentExtra 参数控件样式
     * @param string $ComponentValue 印章ID，如果是手写签名则为jpg或png格式的base64图片

SIGN_SEAL控件,可以用ORG_DEFAULT_SEAL表示主企业的默认印章
SIGN_SEAL控件,可以用SUBORG_DEFAULT_SEAL表示子企业的默认印章
SIGN_SEAL控件,可以用USER_DEFAULT_SEAL表示个人默认印章
     * @param integer $SealOperate 如果是SIGN_SEAL类型的签署控件, 参数标识H5签署界面是否在该签署区上进行放置展示, 1为放置,其他为不放置
     * @param string $GenerateExtra 不同GenerateMode对应的额外信息
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

        if (array_key_exists("SealOperate",$param) and $param["SealOperate"] !== null) {
            $this->SealOperate = $param["SealOperate"];
        }

        if (array_key_exists("GenerateExtra",$param) and $param["GenerateExtra"] !== null) {
            $this->GenerateExtra = $param["GenerateExtra"];
        }
    }
}
