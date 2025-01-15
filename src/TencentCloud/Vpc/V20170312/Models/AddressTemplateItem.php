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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 地址信息
 *
 * @method string getAddressTemplateId() 获取IP地址模板ID
 * @method void setAddressTemplateId(string $AddressTemplateId) 设置IP地址模板ID
 * @method string getAddressTemplateName() 获取IP模板名称，废弃字段。
 * @method void setAddressTemplateName(string $AddressTemplateName) 设置IP模板名称，废弃字段。
 * @method string getFrom() 获取废弃字段。
 * @method void setFrom(string $From) 设置废弃字段。
 * @method string getTo() 获取废弃字段
 * @method void setTo(string $To) 设置废弃字段
 * @method string getDescription() 获取备注。
 * @method void setDescription(string $Description) 设置备注。
 * @method string getUpdatedTime() 获取最后更新时间。
 * @method void setUpdatedTime(string $UpdatedTime) 设置最后更新时间。
 */
class AddressTemplateItem extends AbstractModel
{
    /**
     * @var string IP地址模板ID
     */
    public $AddressTemplateId;

    /**
     * @var string IP模板名称，废弃字段。
     */
    public $AddressTemplateName;

    /**
     * @var string 废弃字段。
     */
    public $From;

    /**
     * @var string 废弃字段
     */
    public $To;

    /**
     * @var string 备注。
     */
    public $Description;

    /**
     * @var string 最后更新时间。
     */
    public $UpdatedTime;

    /**
     * @param string $AddressTemplateId IP地址模板ID
     * @param string $AddressTemplateName IP模板名称，废弃字段。
     * @param string $From 废弃字段。
     * @param string $To 废弃字段
     * @param string $Description 备注。
     * @param string $UpdatedTime 最后更新时间。
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
        if (array_key_exists("AddressTemplateId",$param) and $param["AddressTemplateId"] !== null) {
            $this->AddressTemplateId = $param["AddressTemplateId"];
        }

        if (array_key_exists("AddressTemplateName",$param) and $param["AddressTemplateName"] !== null) {
            $this->AddressTemplateName = $param["AddressTemplateName"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("To",$param) and $param["To"] !== null) {
            $this->To = $param["To"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }
    }
}
