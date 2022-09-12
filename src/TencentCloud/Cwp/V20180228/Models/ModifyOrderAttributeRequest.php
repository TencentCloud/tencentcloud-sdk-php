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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyOrderAttribute请求参数结构体
 *
 * @method integer getLicenseType() 获取授权类型 0 专业版-按量计费, 1专业版-包年包月 , 2 旗舰版-包年包月
 * @method void setLicenseType(integer $LicenseType) 设置授权类型 0 专业版-按量计费, 1专业版-包年包月 , 2 旗舰版-包年包月
 * @method string getResourceId() 获取资源ID
 * @method void setResourceId(string $ResourceId) 设置资源ID
 * @method string getAttrName() 获取可编辑的属性名称 ,当前支持的有: alias 资源别名
 * @method void setAttrName(string $AttrName) 设置可编辑的属性名称 ,当前支持的有: alias 资源别名
 * @method string getAttrValue() 获取属性值
 * @method void setAttrValue(string $AttrValue) 设置属性值
 */
class ModifyOrderAttributeRequest extends AbstractModel
{
    /**
     * @var integer 授权类型 0 专业版-按量计费, 1专业版-包年包月 , 2 旗舰版-包年包月
     */
    public $LicenseType;

    /**
     * @var string 资源ID
     */
    public $ResourceId;

    /**
     * @var string 可编辑的属性名称 ,当前支持的有: alias 资源别名
     */
    public $AttrName;

    /**
     * @var string 属性值
     */
    public $AttrValue;

    /**
     * @param integer $LicenseType 授权类型 0 专业版-按量计费, 1专业版-包年包月 , 2 旗舰版-包年包月
     * @param string $ResourceId 资源ID
     * @param string $AttrName 可编辑的属性名称 ,当前支持的有: alias 资源别名
     * @param string $AttrValue 属性值
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
        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("AttrName",$param) and $param["AttrName"] !== null) {
            $this->AttrName = $param["AttrName"];
        }

        if (array_key_exists("AttrValue",$param) and $param["AttrValue"] !== null) {
            $this->AttrValue = $param["AttrValue"];
        }
    }
}
