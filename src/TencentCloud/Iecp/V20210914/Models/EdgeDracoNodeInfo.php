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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预注册节点的信息
 *
 * @method integer getId() 获取节点ID
 * @method void setId(integer $Id) 设置节点ID
 * @method string getName() 获取节点名称
 * @method void setName(string $Name) 设置节点名称
 * @method boolean getIsUsed() 获取是否已激活
 * @method void setIsUsed(boolean $IsUsed) 设置是否已激活
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getRemark() 获取备注信息，如批次
 * @method void setRemark(string $Remark) 设置备注信息，如批次
 * @method string getSN() 获取SN 设备号
 * @method void setSN(string $SN) 设置SN 设备号
 */
class EdgeDracoNodeInfo extends AbstractModel
{
    /**
     * @var integer 节点ID
     */
    public $Id;

    /**
     * @var string 节点名称
     */
    public $Name;

    /**
     * @var boolean 是否已激活
     */
    public $IsUsed;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 备注信息，如批次
     */
    public $Remark;

    /**
     * @var string SN 设备号
     */
    public $SN;

    /**
     * @param integer $Id 节点ID
     * @param string $Name 节点名称
     * @param boolean $IsUsed 是否已激活
     * @param string $CreateTime 创建时间
     * @param string $Remark 备注信息，如批次
     * @param string $SN SN 设备号
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IsUsed",$param) and $param["IsUsed"] !== null) {
            $this->IsUsed = $param["IsUsed"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("SN",$param) and $param["SN"] !== null) {
            $this->SN = $param["SN"];
        }
    }
}
