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
 * 阻断白名单规则
 *
 * @method string getId() 获取白名单ID。
 * @method void setId(string $Id) 设置白名单ID。
 * @method string getRemark() 获取白名单别名。
 * @method void setRemark(string $Remark) 设置白名单别名。
 * @method string getSrcIp() 获取阻断来源IP。
 * @method void setSrcIp(string $SrcIp) 设置阻断来源IP。
 * @method string getModifyTime() 获取修改白名单时间。
 * @method void setModifyTime(string $ModifyTime) 设置修改白名单时间。
 * @method string getCreateTime() 获取创建白名单时间。
 * @method void setCreateTime(string $CreateTime) 设置创建白名单时间。
 * @method string getUuid() 获取白名单所属机器。
 * @method void setUuid(string $Uuid) 设置白名单所属机器。
 * @method boolean getIsGlobal() 获取白名单是否全局
 * @method void setIsGlobal(boolean $IsGlobal) 设置白名单是否全局
 * @method array getQuuids() 获取白名单所属机器列表
 * @method void setQuuids(array $Quuids) 设置白名单所属机器列表
 */
class BanWhiteList extends AbstractModel
{
    /**
     * @var string 白名单ID。
     */
    public $Id;

    /**
     * @var string 白名单别名。
     */
    public $Remark;

    /**
     * @var string 阻断来源IP。
     */
    public $SrcIp;

    /**
     * @var string 修改白名单时间。
     */
    public $ModifyTime;

    /**
     * @var string 创建白名单时间。
     */
    public $CreateTime;

    /**
     * @var string 白名单所属机器。
     */
    public $Uuid;

    /**
     * @var boolean 白名单是否全局
     */
    public $IsGlobal;

    /**
     * @var array 白名单所属机器列表
     */
    public $Quuids;

    /**
     * @param string $Id 白名单ID。
     * @param string $Remark 白名单别名。
     * @param string $SrcIp 阻断来源IP。
     * @param string $ModifyTime 修改白名单时间。
     * @param string $CreateTime 创建白名单时间。
     * @param string $Uuid 白名单所属机器。
     * @param boolean $IsGlobal 白名单是否全局
     * @param array $Quuids 白名单所属机器列表
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("Quuids",$param) and $param["Quuids"] !== null) {
            $this->Quuids = $param["Quuids"];
        }
    }
}
