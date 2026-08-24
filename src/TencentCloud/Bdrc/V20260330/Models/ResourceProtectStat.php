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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 产品受保护统计信息
 *
 * @method integer getProtectedCount() 获取受保护资源数
 * @method void setProtectedCount(integer $ProtectedCount) 设置受保护资源数
 * @method integer getTotalCount() 获取资源总数
 * @method void setTotalCount(integer $TotalCount) 设置资源总数
 */
class ResourceProtectStat extends AbstractModel
{
    /**
     * @var integer 受保护资源数
     */
    public $ProtectedCount;

    /**
     * @var integer 资源总数
     */
    public $TotalCount;

    /**
     * @param integer $ProtectedCount 受保护资源数
     * @param integer $TotalCount 资源总数
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
        if (array_key_exists("ProtectedCount",$param) and $param["ProtectedCount"] !== null) {
            $this->ProtectedCount = $param["ProtectedCount"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
