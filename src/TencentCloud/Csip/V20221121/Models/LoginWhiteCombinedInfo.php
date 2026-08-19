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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 异地登录合并后白名单
 *
 * @method array getPlaces() 获取<p>白名单地域</p>
 * @method void setPlaces(array $Places) 设置<p>白名单地域</p>
 * @method string getUserName() 获取<p>白名单用户（多个用户逗号隔开）</p>
 * @method void setUserName(string $UserName) 设置<p>白名单用户（多个用户逗号隔开）</p>
 * @method string getSrcIp() 获取<p>白名单IP（多个IP逗号隔开）</p>
 * @method void setSrcIp(string $SrcIp) 设置<p>白名单IP（多个IP逗号隔开）</p>
 * @method string getLocale() 获取<p>地域字符串</p>
 * @method void setLocale(string $Locale) 设置<p>地域字符串</p>
 * @method string getRemark() 获取<p>备注</p>
 * @method void setRemark(string $Remark) 设置<p>备注</p>
 * @method string getStartTime() 获取<p>开始时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间</p>
 * @method string getEndTime() 获取<p>结束时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间</p>
 * @method integer getIsGlobal() 获取<p>是否对全局生效, 1：全局有效 0: 对指定主机列表生效&#39;</p>
 * @method void setIsGlobal(integer $IsGlobal) 设置<p>是否对全局生效, 1：全局有效 0: 对指定主机列表生效&#39;</p>
 * @method string getName() 获取<p>白名单名字：IsLocal=1时固定为：全部服务器；单台机器时为机器内网IP，多台服务器时为服务器数量，如：11台</p>
 * @method void setName(string $Name) 设置<p>白名单名字：IsLocal=1时固定为：全部服务器；单台机器时为机器内网IP，多台服务器时为服务器数量，如：11台</p>
 * @method string getDesc() 获取<p>仅在单台服务器时，返回服务器名称</p>
 * @method void setDesc(string $Desc) 设置<p>仅在单台服务器时，返回服务器名称</p>
 * @method integer getId() 获取<p>白名单ID</p>
 * @method void setId(integer $Id) 设置<p>白名单ID</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getModifyTime() 获取<p>最近修改时间</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>最近修改时间</p>
 * @method string getUuid() 获取<p>服务器Uuid</p>
 * @method void setUuid(string $Uuid) 设置<p>服务器Uuid</p>
 * @method string getLocations() 获取<p>登录地</p>
 * @method void setLocations(string $Locations) 设置<p>登录地</p>
 */
class LoginWhiteCombinedInfo extends AbstractModel
{
    /**
     * @var array <p>白名单地域</p>
     */
    public $Places;

    /**
     * @var string <p>白名单用户（多个用户逗号隔开）</p>
     */
    public $UserName;

    /**
     * @var string <p>白名单IP（多个IP逗号隔开）</p>
     */
    public $SrcIp;

    /**
     * @var string <p>地域字符串</p>
     */
    public $Locale;

    /**
     * @var string <p>备注</p>
     */
    public $Remark;

    /**
     * @var string <p>开始时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束时间</p>
     */
    public $EndTime;

    /**
     * @var integer <p>是否对全局生效, 1：全局有效 0: 对指定主机列表生效&#39;</p>
     */
    public $IsGlobal;

    /**
     * @var string <p>白名单名字：IsLocal=1时固定为：全部服务器；单台机器时为机器内网IP，多台服务器时为服务器数量，如：11台</p>
     */
    public $Name;

    /**
     * @var string <p>仅在单台服务器时，返回服务器名称</p>
     */
    public $Desc;

    /**
     * @var integer <p>白名单ID</p>
     */
    public $Id;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>最近修改时间</p>
     */
    public $ModifyTime;

    /**
     * @var string <p>服务器Uuid</p>
     */
    public $Uuid;

    /**
     * @var string <p>登录地</p>
     */
    public $Locations;

    /**
     * @param array $Places <p>白名单地域</p>
     * @param string $UserName <p>白名单用户（多个用户逗号隔开）</p>
     * @param string $SrcIp <p>白名单IP（多个IP逗号隔开）</p>
     * @param string $Locale <p>地域字符串</p>
     * @param string $Remark <p>备注</p>
     * @param string $StartTime <p>开始时间</p>
     * @param string $EndTime <p>结束时间</p>
     * @param integer $IsGlobal <p>是否对全局生效, 1：全局有效 0: 对指定主机列表生效&#39;</p>
     * @param string $Name <p>白名单名字：IsLocal=1时固定为：全部服务器；单台机器时为机器内网IP，多台服务器时为服务器数量，如：11台</p>
     * @param string $Desc <p>仅在单台服务器时，返回服务器名称</p>
     * @param integer $Id <p>白名单ID</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $ModifyTime <p>最近修改时间</p>
     * @param string $Uuid <p>服务器Uuid</p>
     * @param string $Locations <p>登录地</p>
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
        if (array_key_exists("Places",$param) and $param["Places"] !== null) {
            $this->Places = [];
            foreach ($param["Places"] as $key => $value){
                $obj = new Place();
                $obj->deserialize($value);
                array_push($this->Places, $obj);
            }
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("Locale",$param) and $param["Locale"] !== null) {
            $this->Locale = $param["Locale"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Locations",$param) and $param["Locations"] !== null) {
            $this->Locations = $param["Locations"];
        }
    }
}
