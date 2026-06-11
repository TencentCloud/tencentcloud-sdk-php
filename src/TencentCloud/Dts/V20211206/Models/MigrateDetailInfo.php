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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 迁移执行过程信息
 *
 * @method integer getStepAll() 获取<p>总步骤数</p>
 * @method void setStepAll(integer $StepAll) 设置<p>总步骤数</p>
 * @method integer getStepNow() 获取<p>当前步骤</p>
 * @method void setStepNow(integer $StepNow) 设置<p>当前步骤</p>
 * @method integer getMasterSlaveDistance() 获取<p>主从差距，MB；只在任务正常，迁移或者同步的最后一步（追Binlog的阶段才有校），如果是非法值，返回-1</p>
 * @method void setMasterSlaveDistance(integer $MasterSlaveDistance) 设置<p>主从差距，MB；只在任务正常，迁移或者同步的最后一步（追Binlog的阶段才有校），如果是非法值，返回-1</p>
 * @method integer getSecondsBehindMaster() 获取<p>主从差距，秒；只在任务正常，迁移或者同步的最后一步（追Binlog的阶段才有校），如果是非法值，返回-1</p>
 * @method void setSecondsBehindMaster(integer $SecondsBehindMaster) 设置<p>主从差距，秒；只在任务正常，迁移或者同步的最后一步（追Binlog的阶段才有校），如果是非法值，返回-1</p>
 * @method array getStepInfo() 获取<p>步骤信息</p>
 * @method void setStepInfo(array $StepInfo) 设置<p>步骤信息</p>
 */
class MigrateDetailInfo extends AbstractModel
{
    /**
     * @var integer <p>总步骤数</p>
     */
    public $StepAll;

    /**
     * @var integer <p>当前步骤</p>
     */
    public $StepNow;

    /**
     * @var integer <p>主从差距，MB；只在任务正常，迁移或者同步的最后一步（追Binlog的阶段才有校），如果是非法值，返回-1</p>
     */
    public $MasterSlaveDistance;

    /**
     * @var integer <p>主从差距，秒；只在任务正常，迁移或者同步的最后一步（追Binlog的阶段才有校），如果是非法值，返回-1</p>
     */
    public $SecondsBehindMaster;

    /**
     * @var array <p>步骤信息</p>
     */
    public $StepInfo;

    /**
     * @param integer $StepAll <p>总步骤数</p>
     * @param integer $StepNow <p>当前步骤</p>
     * @param integer $MasterSlaveDistance <p>主从差距，MB；只在任务正常，迁移或者同步的最后一步（追Binlog的阶段才有校），如果是非法值，返回-1</p>
     * @param integer $SecondsBehindMaster <p>主从差距，秒；只在任务正常，迁移或者同步的最后一步（追Binlog的阶段才有校），如果是非法值，返回-1</p>
     * @param array $StepInfo <p>步骤信息</p>
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
        if (array_key_exists("StepAll",$param) and $param["StepAll"] !== null) {
            $this->StepAll = $param["StepAll"];
        }

        if (array_key_exists("StepNow",$param) and $param["StepNow"] !== null) {
            $this->StepNow = $param["StepNow"];
        }

        if (array_key_exists("MasterSlaveDistance",$param) and $param["MasterSlaveDistance"] !== null) {
            $this->MasterSlaveDistance = $param["MasterSlaveDistance"];
        }

        if (array_key_exists("SecondsBehindMaster",$param) and $param["SecondsBehindMaster"] !== null) {
            $this->SecondsBehindMaster = $param["SecondsBehindMaster"];
        }

        if (array_key_exists("StepInfo",$param) and $param["StepInfo"] !== null) {
            $this->StepInfo = [];
            foreach ($param["StepInfo"] as $key => $value){
                $obj = new StepDetailInfo();
                $obj->deserialize($value);
                array_push($this->StepInfo, $obj);
            }
        }
    }
}
