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
 * 异地登录合并后白名单
 *
 * @method array getPlaces() 获取白名单地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlaces(array $Places) 设置白名单地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserName() 获取白名单用户（多个用户逗号隔开）
 * @method void setUserName(string $UserName) 设置白名单用户（多个用户逗号隔开）
 * @method string getSrcIp() 获取白名单IP（多个IP逗号隔开）
 * @method void setSrcIp(string $SrcIp) 设置白名单IP（多个IP逗号隔开）
 * @method string getLocale() 获取地域字符串
 * @method void setLocale(string $Locale) 设置地域字符串
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method integer getIsGlobal() 获取是否对全局生效, 1：全局有效 0: 对指定主机列表生效'
 * @method void setIsGlobal(integer $IsGlobal) 设置是否对全局生效, 1：全局有效 0: 对指定主机列表生效'
 * @method string getName() 获取白名单名字：IsLocal=1时固定为：全部服务器；单台机器时为机器内网IP，多台服务器时为服务器数量，如：11台
 * @method void setName(string $Name) 设置白名单名字：IsLocal=1时固定为：全部服务器；单台机器时为机器内网IP，多台服务器时为服务器数量，如：11台
 * @method string getDesc() 获取仅在单台服务器时，返回服务器名称
 * @method void setDesc(string $Desc) 设置仅在单台服务器时，返回服务器名称
 * @method integer getId() 获取白名单ID
 * @method void setId(integer $Id) 设置白名单ID
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getModifyTime() 获取最近修改时间
 * @method void setModifyTime(string $ModifyTime) 设置最近修改时间
 * @method string getUuid() 获取服务器Uuid
 * @method void setUuid(string $Uuid) 设置服务器Uuid
 */
class LoginWhiteCombinedInfo extends AbstractModel
{
    /**
     * @var array 白名单地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Places;

    /**
     * @var string 白名单用户（多个用户逗号隔开）
     */
    public $UserName;

    /**
     * @var string 白名单IP（多个IP逗号隔开）
     */
    public $SrcIp;

    /**
     * @var string 地域字符串
     */
    public $Locale;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var integer 是否对全局生效, 1：全局有效 0: 对指定主机列表生效'
     */
    public $IsGlobal;

    /**
     * @var string 白名单名字：IsLocal=1时固定为：全部服务器；单台机器时为机器内网IP，多台服务器时为服务器数量，如：11台
     */
    public $Name;

    /**
     * @var string 仅在单台服务器时，返回服务器名称
     */
    public $Desc;

    /**
     * @var integer 白名单ID
     */
    public $Id;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 最近修改时间
     */
    public $ModifyTime;

    /**
     * @var string 服务器Uuid
     */
    public $Uuid;

    /**
     * @param array $Places 白名单地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserName 白名单用户（多个用户逗号隔开）
     * @param string $SrcIp 白名单IP（多个IP逗号隔开）
     * @param string $Locale 地域字符串
     * @param string $Remark 备注
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param integer $IsGlobal 是否对全局生效, 1：全局有效 0: 对指定主机列表生效'
     * @param string $Name 白名单名字：IsLocal=1时固定为：全部服务器；单台机器时为机器内网IP，多台服务器时为服务器数量，如：11台
     * @param string $Desc 仅在单台服务器时，返回服务器名称
     * @param integer $Id 白名单ID
     * @param string $CreateTime 创建时间
     * @param string $ModifyTime 最近修改时间
     * @param string $Uuid 服务器Uuid
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
    }
}
