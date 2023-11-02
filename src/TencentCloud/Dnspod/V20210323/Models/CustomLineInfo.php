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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义线路详情
 *
 * @method integer getDomainId() 获取域名ID
 * @method void setDomainId(integer $DomainId) 设置域名ID
 * @method string getName() 获取自定义线路名称
 * @method void setName(string $Name) 设置自定义线路名称
 * @method string getArea() 获取自定义线路IP段
 * @method void setArea(string $Area) 设置自定义线路IP段
 * @method integer getUseCount() 获取已使用IP段个数
 * @method void setUseCount(integer $UseCount) 设置已使用IP段个数
 * @method integer getMaxCount() 获取允许使用IP段最大个数
 * @method void setMaxCount(integer $MaxCount) 设置允许使用IP段最大个数
 */
class CustomLineInfo extends AbstractModel
{
    /**
     * @var integer 域名ID
     */
    public $DomainId;

    /**
     * @var string 自定义线路名称
     */
    public $Name;

    /**
     * @var string 自定义线路IP段
     */
    public $Area;

    /**
     * @var integer 已使用IP段个数
     */
    public $UseCount;

    /**
     * @var integer 允许使用IP段最大个数
     */
    public $MaxCount;

    /**
     * @param integer $DomainId 域名ID
     * @param string $Name 自定义线路名称
     * @param string $Area 自定义线路IP段
     * @param integer $UseCount 已使用IP段个数
     * @param integer $MaxCount 允许使用IP段最大个数
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
        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("UseCount",$param) and $param["UseCount"] !== null) {
            $this->UseCount = $param["UseCount"];
        }

        if (array_key_exists("MaxCount",$param) and $param["MaxCount"] !== null) {
            $this->MaxCount = $param["MaxCount"];
        }
    }
}
