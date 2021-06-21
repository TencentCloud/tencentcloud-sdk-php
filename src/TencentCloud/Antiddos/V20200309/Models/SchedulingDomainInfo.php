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
 * 调度域名信息
 *
 * @method string getDomain() 获取调度域名
 * @method void setDomain(string $Domain) 设置调度域名
 * @method array getLineIPList() 获取线路IP列表
 * @method void setLineIPList(array $LineIPList) 设置线路IP列表
 * @method string getMethod() 获取调度方式，当前仅支持优先级的方式，取值[priority]
 * @method void setMethod(string $Method) 设置调度方式，当前仅支持优先级的方式，取值[priority]
 * @method integer getTTL() 获取调度域名解析记录的TTL值
 * @method void setTTL(integer $TTL) 设置调度域名解析记录的TTL值
 * @method integer getStatus() 获取运行状态，取值[
0：未运行
1：运行中
2：运行异常
]
 * @method void setStatus(integer $Status) 设置运行状态，取值[
0：未运行
1：运行中
2：运行异常
]
 * @method string getCreatedTime() 获取创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
 * @method string getModifyTime() 获取最后修改时间
 * @method void setModifyTime(string $ModifyTime) 设置最后修改时间
 * @method string getUsrDomainName() 获取域名名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsrDomainName(string $UsrDomainName) 设置域名名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class SchedulingDomainInfo extends AbstractModel
{
    /**
     * @var string 调度域名
     */
    public $Domain;

    /**
     * @var array 线路IP列表
     */
    public $LineIPList;

    /**
     * @var string 调度方式，当前仅支持优先级的方式，取值[priority]
     */
    public $Method;

    /**
     * @var integer 调度域名解析记录的TTL值
     */
    public $TTL;

    /**
     * @var integer 运行状态，取值[
0：未运行
1：运行中
2：运行异常
]
     */
    public $Status;

    /**
     * @var string 创建时间
     */
    public $CreatedTime;

    /**
     * @var string 最后修改时间
     */
    public $ModifyTime;

    /**
     * @var string 域名名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsrDomainName;

    /**
     * @param string $Domain 调度域名
     * @param array $LineIPList 线路IP列表
     * @param string $Method 调度方式，当前仅支持优先级的方式，取值[priority]
     * @param integer $TTL 调度域名解析记录的TTL值
     * @param integer $Status 运行状态，取值[
0：未运行
1：运行中
2：运行异常
]
     * @param string $CreatedTime 创建时间
     * @param string $ModifyTime 最后修改时间
     * @param string $UsrDomainName 域名名称
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("LineIPList",$param) and $param["LineIPList"] !== null) {
            $this->LineIPList = [];
            foreach ($param["LineIPList"] as $key => $value){
                $obj = new IPLineInfo();
                $obj->deserialize($value);
                array_push($this->LineIPList, $obj);
            }
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("TTL",$param) and $param["TTL"] !== null) {
            $this->TTL = $param["TTL"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("UsrDomainName",$param) and $param["UsrDomainName"] !== null) {
            $this->UsrDomainName = $param["UsrDomainName"];
        }
    }
}
