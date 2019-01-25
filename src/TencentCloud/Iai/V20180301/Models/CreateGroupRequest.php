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
namespace TencentCloud\Iai\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getGroupName() 获取人员库名称，[1,60]个字符，可修改，不可重复。
 * @method void setGroupName(string $GroupName) 设置人员库名称，[1,60]个字符，可修改，不可重复。
 * @method string getGroupId() 获取人员库 ID，不可修改，不可重复。支持英文、数字、-%@#&_，长度限制64B。
 * @method void setGroupId(string $GroupId) 设置人员库 ID，不可修改，不可重复。支持英文、数字、-%@#&_，长度限制64B。
 * @method array getGroupExDescriptions() 获取人员库自定义描述字段，用于描述人员库中人员属性，该人员库下所有人员将拥有此描述字段。 
最多可以创建5个。 
每个自定义描述字段支持[1,30]个字符。 
在同一人员库中自定义描述字段不可重复。 
例： 设置某人员库“自定义描述字段”为["学号","工号","手机号"]， 
则该人员库下所有人员将拥有名为“学号”、“工号”、“手机号”的描述字段， 
可在对应人员描述字段中填写内容，登记该人员的学号、工号、手机号等信息。
 * @method void setGroupExDescriptions(array $GroupExDescriptions) 设置人员库自定义描述字段，用于描述人员库中人员属性，该人员库下所有人员将拥有此描述字段。 
最多可以创建5个。 
每个自定义描述字段支持[1,30]个字符。 
在同一人员库中自定义描述字段不可重复。 
例： 设置某人员库“自定义描述字段”为["学号","工号","手机号"]， 
则该人员库下所有人员将拥有名为“学号”、“工号”、“手机号”的描述字段， 
可在对应人员描述字段中填写内容，登记该人员的学号、工号、手机号等信息。
 * @method string getTag() 获取人员库信息备注，[0，40]个字符。
 * @method void setTag(string $Tag) 设置人员库信息备注，[0，40]个字符。
 */

/**
 *CreateGroup请求参数结构体
 */
class CreateGroupRequest extends AbstractModel
{
    /**
     * @var string 人员库名称，[1,60]个字符，可修改，不可重复。
     */
    public $GroupName;

    /**
     * @var string 人员库 ID，不可修改，不可重复。支持英文、数字、-%@#&_，长度限制64B。
     */
    public $GroupId;

    /**
     * @var array 人员库自定义描述字段，用于描述人员库中人员属性，该人员库下所有人员将拥有此描述字段。 
最多可以创建5个。 
每个自定义描述字段支持[1,30]个字符。 
在同一人员库中自定义描述字段不可重复。 
例： 设置某人员库“自定义描述字段”为["学号","工号","手机号"]， 
则该人员库下所有人员将拥有名为“学号”、“工号”、“手机号”的描述字段， 
可在对应人员描述字段中填写内容，登记该人员的学号、工号、手机号等信息。
     */
    public $GroupExDescriptions;

    /**
     * @var string 人员库信息备注，[0，40]个字符。
     */
    public $Tag;
    /**
     * @param string $GroupName 人员库名称，[1,60]个字符，可修改，不可重复。
     * @param string $GroupId 人员库 ID，不可修改，不可重复。支持英文、数字、-%@#&_，长度限制64B。
     * @param array $GroupExDescriptions 人员库自定义描述字段，用于描述人员库中人员属性，该人员库下所有人员将拥有此描述字段。 
最多可以创建5个。 
每个自定义描述字段支持[1,30]个字符。 
在同一人员库中自定义描述字段不可重复。 
例： 设置某人员库“自定义描述字段”为["学号","工号","手机号"]， 
则该人员库下所有人员将拥有名为“学号”、“工号”、“手机号”的描述字段， 
可在对应人员描述字段中填写内容，登记该人员的学号、工号、手机号等信息。
     * @param string $Tag 人员库信息备注，[0，40]个字符。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupExDescriptions",$param) and $param["GroupExDescriptions"] !== null) {
            $this->GroupExDescriptions = $param["GroupExDescriptions"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }
    }
}
