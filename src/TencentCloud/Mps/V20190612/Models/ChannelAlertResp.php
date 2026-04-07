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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 线性组装频道告警返回信息。
 *
 * @method array getProgramAlertCounts() 获取Program告警聚合信息。
 * @method void setProgramAlertCounts(array $ProgramAlertCounts) 设置Program告警聚合信息。
 * @method array getProgramAlertInfos() 获取Program告警明细信息。
 * @method void setProgramAlertInfos(array $ProgramAlertInfos) 设置Program告警明细信息。
 */
class ChannelAlertResp extends AbstractModel
{
    /**
     * @var array Program告警聚合信息。
     */
    public $ProgramAlertCounts;

    /**
     * @var array Program告警明细信息。
     */
    public $ProgramAlertInfos;

    /**
     * @param array $ProgramAlertCounts Program告警聚合信息。
     * @param array $ProgramAlertInfos Program告警明细信息。
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
        if (array_key_exists("ProgramAlertCounts",$param) and $param["ProgramAlertCounts"] !== null) {
            $this->ProgramAlertCounts = [];
            foreach ($param["ProgramAlertCounts"] as $key => $value){
                $obj = new ProgramAlertCounts();
                $obj->deserialize($value);
                array_push($this->ProgramAlertCounts, $obj);
            }
        }

        if (array_key_exists("ProgramAlertInfos",$param) and $param["ProgramAlertInfos"] !== null) {
            $this->ProgramAlertInfos = [];
            foreach ($param["ProgramAlertInfos"] as $key => $value){
                $obj = new ProgramAlertInfos();
                $obj->deserialize($value);
                array_push($this->ProgramAlertInfos, $obj);
            }
        }
    }
}
