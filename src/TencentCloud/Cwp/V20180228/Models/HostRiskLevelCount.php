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
 * 主机风险计数
 *
 * @method string getHostId() 获取主机ID
 * @method void setHostId(string $HostId) 设置主机ID
 * @method string getHostName() 获取主机名
 * @method void setHostName(string $HostName) 设置主机名
 * @method integer getSeriousCount() 获取严重个数
 * @method void setSeriousCount(integer $SeriousCount) 设置严重个数
 * @method integer getHighCount() 获取高危个数
 * @method void setHighCount(integer $HighCount) 设置高危个数
 * @method integer getMediumCount() 获取中危个数
 * @method void setMediumCount(integer $MediumCount) 设置中危个数
 * @method integer getLowCount() 获取低危个数
 * @method void setLowCount(integer $LowCount) 设置低危个数
 */
class HostRiskLevelCount extends AbstractModel
{
    /**
     * @var string 主机ID
     */
    public $HostId;

    /**
     * @var string 主机名
     */
    public $HostName;

    /**
     * @var integer 严重个数
     */
    public $SeriousCount;

    /**
     * @var integer 高危个数
     */
    public $HighCount;

    /**
     * @var integer 中危个数
     */
    public $MediumCount;

    /**
     * @var integer 低危个数
     */
    public $LowCount;

    /**
     * @param string $HostId 主机ID
     * @param string $HostName 主机名
     * @param integer $SeriousCount 严重个数
     * @param integer $HighCount 高危个数
     * @param integer $MediumCount 中危个数
     * @param integer $LowCount 低危个数
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
        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            $this->HostId = $param["HostId"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("SeriousCount",$param) and $param["SeriousCount"] !== null) {
            $this->SeriousCount = $param["SeriousCount"];
        }

        if (array_key_exists("HighCount",$param) and $param["HighCount"] !== null) {
            $this->HighCount = $param["HighCount"];
        }

        if (array_key_exists("MediumCount",$param) and $param["MediumCount"] !== null) {
            $this->MediumCount = $param["MediumCount"];
        }

        if (array_key_exists("LowCount",$param) and $param["LowCount"] !== null) {
            $this->LowCount = $param["LowCount"];
        }
    }
}
