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
 * @method string getUserName() 获取<p>白名单用户（多个用户逗号隔开）</p>
 * @method void setUserName(string $UserName) 设置<p>白名单用户（多个用户逗号隔开）</p>
 * @method string getSrcIp() 获取<p>更新后记录的白名单维度信息</p>
 * @method void setSrcIp(string $SrcIp) 设置<p>更新后记录的白名单维度信息</p>
 * @method string getStartTime() 获取<p>开始时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间</p>
 * @method string getEndTime() 获取<p>结束时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间</p>
 * @method string getRemark() 获取<p>备注</p>
 * @method void setRemark(string $Remark) 设置<p>备注</p>
 * @method integer getIsGlobal() 获取<p>是否对所有服务器生效，0-否，1-是</p>
 * @method void setIsGlobal(integer $IsGlobal) 设置<p>是否对所有服务器生效，0-否，1-是</p>
 * @method integer getId() 获取<p>白名单ID</p>
 * @method void setId(integer $Id) 设置<p>白名单ID</p>
 * @method array getHosts() 获取<p>服务器列表</p>
 * @method void setHosts(array $Hosts) 设置<p>服务器列表</p>
 * @method array getPlaces() 获取<p>地域列表</p>
 * @method void setPlaces(array $Places) 设置<p>地域列表</p>
 */
class ModifyLoginWhiteRecordRequest extends AbstractModel
{
    /**
     * @var string <p>白名单用户（多个用户逗号隔开）</p>
     */
    public $UserName;

    /**
     * @var string <p>更新后记录的白名单维度信息</p>
     */
    public $SrcIp;

    /**
     * @var string <p>开始时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束时间</p>
     */
    public $EndTime;

    /**
     * @var string <p>备注</p>
     */
    public $Remark;

    /**
     * @var integer <p>是否对所有服务器生效，0-否，1-是</p>
     */
    public $IsGlobal;

    /**
     * @var integer <p>白名单ID</p>
     */
    public $Id;

    /**
     * @var array <p>服务器列表</p>
     */
    public $Hosts;

    /**
     * @var array <p>地域列表</p>
     */
    public $Places;

    /**
     * @param string $UserName <p>白名单用户（多个用户逗号隔开）</p>
     * @param string $SrcIp <p>更新后记录的白名单维度信息</p>
     * @param string $StartTime <p>开始时间</p>
     * @param string $EndTime <p>结束时间</p>
     * @param string $Remark <p>备注</p>
     * @param integer $IsGlobal <p>是否对所有服务器生效，0-否，1-是</p>
     * @param integer $Id <p>白名单ID</p>
     * @param array $Hosts <p>服务器列表</p>
     * @param array $Places <p>地域列表</p>
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
