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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 统一域名解析的DNS记录
 *
 * @method integer getDnsRecordId() 获取解析记录ID
 * @method void setDnsRecordId(integer $DnsRecordId) 设置解析记录ID
 * @method array getCountryAreaList() 获取域名就近接入地域信息列表
 * @method void setCountryAreaList(array $CountryAreaList) 设置域名就近接入地域信息列表
 * @method array getAccessList() 获取域名解析对应的通道接入点信息列表
 * @method void setAccessList(array $AccessList) 设置域名解析对应的通道接入点信息列表
 * @method integer getStatus() 获取解析状态：1表示运行中，2表示创建中，3表示修改中，4表示删除中
 * @method void setStatus(integer $Status) 设置解析状态：1表示运行中，2表示创建中，3表示修改中，4表示删除中
 */
class GlobalDns extends AbstractModel
{
    /**
     * @var integer 解析记录ID
     */
    public $DnsRecordId;

    /**
     * @var array 域名就近接入地域信息列表
     */
    public $CountryAreaList;

    /**
     * @var array 域名解析对应的通道接入点信息列表
     */
    public $AccessList;

    /**
     * @var integer 解析状态：1表示运行中，2表示创建中，3表示修改中，4表示删除中
     */
    public $Status;

    /**
     * @param integer $DnsRecordId 解析记录ID
     * @param array $CountryAreaList 域名就近接入地域信息列表
     * @param array $AccessList 域名解析对应的通道接入点信息列表
     * @param integer $Status 解析状态：1表示运行中，2表示创建中，3表示修改中，4表示删除中
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
        if (array_key_exists("DnsRecordId",$param) and $param["DnsRecordId"] !== null) {
            $this->DnsRecordId = $param["DnsRecordId"];
        }

        if (array_key_exists("CountryAreaList",$param) and $param["CountryAreaList"] !== null) {
            $this->CountryAreaList = [];
            foreach ($param["CountryAreaList"] as $key => $value){
                $obj = new CountryAreaMap();
                $obj->deserialize($value);
                array_push($this->CountryAreaList, $obj);
            }
        }

        if (array_key_exists("AccessList",$param) and $param["AccessList"] !== null) {
            $this->AccessList = [];
            foreach ($param["AccessList"] as $key => $value){
                $obj = new ProxyAccessInfo();
                $obj->deserialize($value);
                array_push($this->AccessList, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
