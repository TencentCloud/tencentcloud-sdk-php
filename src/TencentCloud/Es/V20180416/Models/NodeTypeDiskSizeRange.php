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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 磁盘上下限
 *
 * @method string getNodeType() 获取机器类型
 * @method void setNodeType(string $NodeType) 设置机器类型
 * @method string getType() 获取节点类型
 * @method void setType(string $Type) 设置节点类型
 * @method string getDiskType() 获取磁盘类型
 * @method void setDiskType(string $DiskType) 设置磁盘类型
 * @method integer getMin() 获取磁盘最小值
 * @method void setMin(integer $Min) 设置磁盘最小值
 * @method integer getMed() 获取中刻度值
 * @method void setMed(integer $Med) 设置中刻度值
 * @method integer getMax() 获取磁盘最大值
 * @method void setMax(integer $Max) 设置磁盘最大值
 * @method integer getDiskCountMin() 获取磁盘最小个数
 * @method void setDiskCountMin(integer $DiskCountMin) 设置磁盘最小个数
 * @method integer getDiskCountMax() 获取磁盘最大个数
 * @method void setDiskCountMax(integer $DiskCountMax) 设置磁盘最大个数
 * @method integer getDiskEncrypt() 获取是否加密盘
 * @method void setDiskEncrypt(integer $DiskEncrypt) 设置是否加密盘
 * @method integer getDiskEnhance() 获取是否增强
 * @method void setDiskEnhance(integer $DiskEnhance) 设置是否增强
 * @method integer getIsLvm() 获取是否lvm
 * @method void setIsLvm(integer $IsLvm) 设置是否lvm
 * @method boolean getIsLocalDiskType() 获取是否本地盘
 * @method void setIsLocalDiskType(boolean $IsLocalDiskType) 设置是否本地盘
 */
class NodeTypeDiskSizeRange extends AbstractModel
{
    /**
     * @var string 机器类型
     */
    public $NodeType;

    /**
     * @var string 节点类型
     */
    public $Type;

    /**
     * @var string 磁盘类型
     */
    public $DiskType;

    /**
     * @var integer 磁盘最小值
     */
    public $Min;

    /**
     * @var integer 中刻度值
     */
    public $Med;

    /**
     * @var integer 磁盘最大值
     */
    public $Max;

    /**
     * @var integer 磁盘最小个数
     */
    public $DiskCountMin;

    /**
     * @var integer 磁盘最大个数
     */
    public $DiskCountMax;

    /**
     * @var integer 是否加密盘
     */
    public $DiskEncrypt;

    /**
     * @var integer 是否增强
     */
    public $DiskEnhance;

    /**
     * @var integer 是否lvm
     */
    public $IsLvm;

    /**
     * @var boolean 是否本地盘
     */
    public $IsLocalDiskType;

    /**
     * @param string $NodeType 机器类型
     * @param string $Type 节点类型
     * @param string $DiskType 磁盘类型
     * @param integer $Min 磁盘最小值
     * @param integer $Med 中刻度值
     * @param integer $Max 磁盘最大值
     * @param integer $DiskCountMin 磁盘最小个数
     * @param integer $DiskCountMax 磁盘最大个数
     * @param integer $DiskEncrypt 是否加密盘
     * @param integer $DiskEnhance 是否增强
     * @param integer $IsLvm 是否lvm
     * @param boolean $IsLocalDiskType 是否本地盘
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
        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("Min",$param) and $param["Min"] !== null) {
            $this->Min = $param["Min"];
        }

        if (array_key_exists("Med",$param) and $param["Med"] !== null) {
            $this->Med = $param["Med"];
        }

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }

        if (array_key_exists("DiskCountMin",$param) and $param["DiskCountMin"] !== null) {
            $this->DiskCountMin = $param["DiskCountMin"];
        }

        if (array_key_exists("DiskCountMax",$param) and $param["DiskCountMax"] !== null) {
            $this->DiskCountMax = $param["DiskCountMax"];
        }

        if (array_key_exists("DiskEncrypt",$param) and $param["DiskEncrypt"] !== null) {
            $this->DiskEncrypt = $param["DiskEncrypt"];
        }

        if (array_key_exists("DiskEnhance",$param) and $param["DiskEnhance"] !== null) {
            $this->DiskEnhance = $param["DiskEnhance"];
        }

        if (array_key_exists("IsLvm",$param) and $param["IsLvm"] !== null) {
            $this->IsLvm = $param["IsLvm"];
        }

        if (array_key_exists("IsLocalDiskType",$param) and $param["IsLocalDiskType"] !== null) {
            $this->IsLocalDiskType = $param["IsLocalDiskType"];
        }
    }
}
