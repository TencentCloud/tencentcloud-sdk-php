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
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getCrossRegionsEnable() 获取是否开启跨地域快照备份ON/OFF
 * @method void setCrossRegionsEnable(string $CrossRegionsEnable) 设置是否开启跨地域快照备份ON/OFF
 * @method array getCrossRegions() 获取快照备份所跨地域
 * @method void setCrossRegions(array $CrossRegions) 设置快照备份所跨地域
 */
class ModifySnapBackupCrossRegionConfigRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 是否开启跨地域快照备份ON/OFF
     */
    public $CrossRegionsEnable;

    /**
     * @var array 快照备份所跨地域
     */
    public $CrossRegions;

    /**
     * @param string $ClusterId 集群ID
     * @param string $CrossRegionsEnable 是否开启跨地域快照备份ON/OFF
     * @param array $CrossRegions 快照备份所跨地域
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
    }
}
