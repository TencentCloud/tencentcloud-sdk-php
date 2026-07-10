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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySnapBackupCrossRegionConfig请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
 * @method string getCrossRegionsEnable() 获取<p>是否开启跨地域快照备份ON/OFF</p>
 * @method void setCrossRegionsEnable(string $CrossRegionsEnable) 设置<p>是否开启跨地域快照备份ON/OFF</p>
 * @method array getCrossRegions() 获取<p>快照备份所跨地域</p>
 * @method void setCrossRegions(array $CrossRegions) 设置<p>快照备份所跨地域</p>
 * @method integer getCrossRegionSaveDays() 获取<p>跨地域备份保留时间</p><p>单位：天</p>
 * @method void setCrossRegionSaveDays(integer $CrossRegionSaveDays) 设置<p>跨地域备份保留时间</p><p>单位：天</p>
 */
class ModifySnapBackupCrossRegionConfigRequest extends AbstractModel
{
    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterId;

    /**
     * @var string <p>是否开启跨地域快照备份ON/OFF</p>
     */
    public $CrossRegionsEnable;

    /**
     * @var array <p>快照备份所跨地域</p>
     */
    public $CrossRegions;

    /**
     * @var integer <p>跨地域备份保留时间</p><p>单位：天</p>
     */
    public $CrossRegionSaveDays;

    /**
     * @param string $ClusterId <p>集群ID</p>
     * @param string $CrossRegionsEnable <p>是否开启跨地域快照备份ON/OFF</p>
     * @param array $CrossRegions <p>快照备份所跨地域</p>
     * @param integer $CrossRegionSaveDays <p>跨地域备份保留时间</p><p>单位：天</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("CrossRegionsEnable",$param) and $param["CrossRegionsEnable"] !== null) {
            $this->CrossRegionsEnable = $param["CrossRegionsEnable"];
        }

        if (array_key_exists("CrossRegions",$param) and $param["CrossRegions"] !== null) {
            $this->CrossRegions = $param["CrossRegions"];
        }

        if (array_key_exists("CrossRegionSaveDays",$param) and $param["CrossRegionSaveDays"] !== null) {
            $this->CrossRegionSaveDays = $param["CrossRegionSaveDays"];
        }
    }
}
