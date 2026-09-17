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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePlatforms请求参数结构体
 *
 * @method array getPlatformIds() 获取<p>平台版套餐id列表</p><p>默认值：若不指定，则分页返回当前账号下所有平台版资源</p>
 * @method void setPlatformIds(array $PlatformIds) 设置<p>平台版套餐id列表</p><p>默认值：若不指定，则分页返回当前账号下所有平台版资源</p>
 * @method integer getLimit() 获取<p>分页限制</p><p>取值范围：[10, 100]</p><p>默认值：10</p>
 * @method void setLimit(integer $Limit) 设置<p>分页限制</p><p>取值范围：[10, 100]</p><p>默认值：10</p>
 * @method integer getOffset() 获取<p>分页偏移量</p><p>默认值：0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量</p><p>默认值：0</p>
 */
class DescribePlatformsRequest extends AbstractModel
{
    /**
     * @var array <p>平台版套餐id列表</p><p>默认值：若不指定，则分页返回当前账号下所有平台版资源</p>
     */
    public $PlatformIds;

    /**
     * @var integer <p>分页限制</p><p>取值范围：[10, 100]</p><p>默认值：10</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页偏移量</p><p>默认值：0</p>
     */
    public $Offset;

    /**
     * @param array $PlatformIds <p>平台版套餐id列表</p><p>默认值：若不指定，则分页返回当前账号下所有平台版资源</p>
     * @param integer $Limit <p>分页限制</p><p>取值范围：[10, 100]</p><p>默认值：10</p>
     * @param integer $Offset <p>分页偏移量</p><p>默认值：0</p>
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
        if (array_key_exists("PlatformIds",$param) and $param["PlatformIds"] !== null) {
            $this->PlatformIds = $param["PlatformIds"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
