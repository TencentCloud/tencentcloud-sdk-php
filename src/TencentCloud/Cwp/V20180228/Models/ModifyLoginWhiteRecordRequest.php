<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * ModifyLoginWhiteRecord请求参数结构体
 *
 * @method string getUserName() 获取白名单用户（多个用户逗号隔开）
 * @method void setUserName(string $UserName) 设置白名单用户（多个用户逗号隔开）
 * @method string getSrcIp() 获取更新后记录的白名单维度信息
 * @method void setSrcIp(string $SrcIp) 设置更新后记录的白名单维度信息
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method integer getIsGlobal() 获取是否对所有服务器生效，0-否，1-是
 * @method void setIsGlobal(integer $IsGlobal) 设置是否对所有服务器生效，0-否，1-是
 * @method integer getId() 获取白名单ID
 * @method void setId(integer $Id) 设置白名单ID
 * @method array getHosts() 获取服务器列表
 * @method void setHosts(array $Hosts) 设置服务器列表
 * @method array getPlaces() 获取地域列表
 * @method void setPlaces(array $Places) 设置地域列表
 */
class ModifyLoginWhiteRecordRequest extends AbstractModel
{
    /**
     * @var string 白名单用户（多个用户逗号隔开）
     */
    public $UserName;

    /**
     * @var string 更新后记录的白名单维度信息
     */
    public $SrcIp;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var integer 是否对所有服务器生效，0-否，1-是
     */
    public $IsGlobal;

    /**
     * @var integer 白名单ID
     */
    public $Id;

    /**
     * @var array 服务器列表
     */
    public $Hosts;

    /**
     * @var array 地域列表
     */
    public $Places;

    /**
     * @param string $UserName 白名单用户（多个用户逗号隔开）
     * @param string $SrcIp 更新后记录的白名单维度信息
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param string $Remark 备注
     * @param integer $IsGlobal 是否对所有服务器生效，0-否，1-是
     * @param integer $Id 白名单ID
     * @param array $Hosts 服务器列表
     * @param array $Places 地域列表
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Hosts",$param) and $param["Hosts"] !== null) {
            $this->Hosts = [];
            foreach ($param["Hosts"] as $key => $value){
                $obj = new HostInfo();
                $obj->deserialize($value);
                array_push($this->Hosts, $obj);
            }
        }

        if (array_key_exists("Places",$param) and $param["Places"] !== null) {
            $this->Places = [];
            foreach ($param["Places"] as $key => $value){
                $obj = new Place();
                $obj->deserialize($value);
                array_push($this->Places, $obj);
            }
        }
    }
}
