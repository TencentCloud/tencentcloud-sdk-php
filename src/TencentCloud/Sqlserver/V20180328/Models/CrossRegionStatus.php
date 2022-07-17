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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 跨地域备份的目标地域和备份状态
 *
 * @method string getCrossRegion() 获取跨地域备份目标地域
 * @method void setCrossRegion(string $CrossRegion) 设置跨地域备份目标地域
 * @method integer getCrossStatus() 获取备份跨地域的同步状态 0-创建中；1-成功；2-失败；4-同步中
 * @method void setCrossStatus(integer $CrossStatus) 设置备份跨地域的同步状态 0-创建中；1-成功；2-失败；4-同步中
 */
class CrossRegionStatus extends AbstractModel
{
    /**
     * @var string 跨地域备份目标地域
     */
    public $CrossRegion;

    /**
     * @var integer 备份跨地域的同步状态 0-创建中；1-成功；2-失败；4-同步中
     */
    public $CrossStatus;

    /**
     * @param string $CrossRegion 跨地域备份目标地域
     * @param integer $CrossStatus 备份跨地域的同步状态 0-创建中；1-成功；2-失败；4-同步中
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
        if (array_key_exists("CrossRegion",$param) and $param["CrossRegion"] !== null) {
            $this->CrossRegion = $param["CrossRegion"];
        }

        if (array_key_exists("CrossStatus",$param) and $param["CrossStatus"] !== null) {
            $this->CrossStatus = $param["CrossStatus"];
        }
    }
}
