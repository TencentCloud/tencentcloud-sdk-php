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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 四七层规则的
 *
 * @method array getEipList() 获取资源实例的IP
 * @method void setEipList(array $EipList) 设置资源实例的IP
 * @method string getInstanceId() 获取资源实例的ID
 * @method void setInstanceId(string $InstanceId) 设置资源实例的ID
 * @method string getCname() 获取资源实例的Cname
 * @method void setCname(string $Cname) 设置资源实例的Cname
 */
class RuleInstanceRelation extends AbstractModel
{
    /**
     * @var array 资源实例的IP
     */
    public $EipList;

    /**
     * @var string 资源实例的ID
     */
    public $InstanceId;

    /**
     * @var string 资源实例的Cname
     */
    public $Cname;

    /**
     * @param array $EipList 资源实例的IP
     * @param string $InstanceId 资源实例的ID
     * @param string $Cname 资源实例的Cname
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
        if (array_key_exists("EipList",$param) and $param["EipList"] !== null) {
            $this->EipList = $param["EipList"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }
    }
}
