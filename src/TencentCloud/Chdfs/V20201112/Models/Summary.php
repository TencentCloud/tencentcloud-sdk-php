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
namespace TencentCloud\Chdfs\V20201112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 生命周期规则当前路径具体存储量信息
 *
 * @method integer getCapacityUsed() 获取已使用容量（byte）
 * @method void setCapacityUsed(integer $CapacityUsed) 设置已使用容量（byte）
 * @method integer getStandardCapacityUsed() 获取已使用COS标准存储容量（byte）
 * @method void setStandardCapacityUsed(integer $StandardCapacityUsed) 设置已使用COS标准存储容量（byte）
 * @method integer getDegradeCapacityUsed() 获取已使用COS低频存储容量（byte）
 * @method void setDegradeCapacityUsed(integer $DegradeCapacityUsed) 设置已使用COS低频存储容量（byte）
 * @method integer getArchiveCapacityUsed() 获取已使用COS归档存储容量（byte）
 * @method void setArchiveCapacityUsed(integer $ArchiveCapacityUsed) 设置已使用COS归档存储容量（byte）
 * @method integer getDeepArchiveCapacityUsed() 获取已使用COS深度归档存储容量（byte）
 * @method void setDeepArchiveCapacityUsed(integer $DeepArchiveCapacityUsed) 设置已使用COS深度归档存储容量（byte）
 * @method integer getIntelligentCapacityUsed() 获取已使用COS智能分层存储容量（byte）
 * @method void setIntelligentCapacityUsed(integer $IntelligentCapacityUsed) 设置已使用COS智能分层存储容量（byte）
 */
class Summary extends AbstractModel
{
    /**
     * @var integer 已使用容量（byte）
     */
    public $CapacityUsed;

    /**
     * @var integer 已使用COS标准存储容量（byte）
     */
    public $StandardCapacityUsed;

    /**
     * @var integer 已使用COS低频存储容量（byte）
     */
    public $DegradeCapacityUsed;

    /**
     * @var integer 已使用COS归档存储容量（byte）
     */
    public $ArchiveCapacityUsed;

    /**
     * @var integer 已使用COS深度归档存储容量（byte）
     */
    public $DeepArchiveCapacityUsed;

    /**
     * @var integer 已使用COS智能分层存储容量（byte）
     */
    public $IntelligentCapacityUsed;

    /**
     * @param integer $CapacityUsed 已使用容量（byte）
     * @param integer $StandardCapacityUsed 已使用COS标准存储容量（byte）
     * @param integer $DegradeCapacityUsed 已使用COS低频存储容量（byte）
     * @param integer $ArchiveCapacityUsed 已使用COS归档存储容量（byte）
     * @param integer $DeepArchiveCapacityUsed 已使用COS深度归档存储容量（byte）
     * @param integer $IntelligentCapacityUsed 已使用COS智能分层存储容量（byte）
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
        if (array_key_exists("CapacityUsed",$param) and $param["CapacityUsed"] !== null) {
            $this->CapacityUsed = $param["CapacityUsed"];
        }

        if (array_key_exists("StandardCapacityUsed",$param) and $param["StandardCapacityUsed"] !== null) {
            $this->StandardCapacityUsed = $param["StandardCapacityUsed"];
        }

        if (array_key_exists("DegradeCapacityUsed",$param) and $param["DegradeCapacityUsed"] !== null) {
            $this->DegradeCapacityUsed = $param["DegradeCapacityUsed"];
        }

        if (array_key_exists("ArchiveCapacityUsed",$param) and $param["ArchiveCapacityUsed"] !== null) {
            $this->ArchiveCapacityUsed = $param["ArchiveCapacityUsed"];
        }

        if (array_key_exists("DeepArchiveCapacityUsed",$param) and $param["DeepArchiveCapacityUsed"] !== null) {
            $this->DeepArchiveCapacityUsed = $param["DeepArchiveCapacityUsed"];
        }

        if (array_key_exists("IntelligentCapacityUsed",$param) and $param["IntelligentCapacityUsed"] !== null) {
            $this->IntelligentCapacityUsed = $param["IntelligentCapacityUsed"];
        }
    }
}
