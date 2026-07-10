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
namespace TencentCloud\Asr\V20190614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 声纹分组名称列表
 *
 * @method integer getTotal() 获取<p>总数量</p>
 * @method void setTotal(integer $Total) 设置<p>总数量</p>
 * @method array getGroupIds() 获取<p>分组名称列表</p>
 * @method void setGroupIds(array $GroupIds) 设置<p>分组名称列表</p>
 */
class VoicePrintGroupList extends AbstractModel
{
    /**
     * @var integer <p>总数量</p>
     */
    public $Total;

    /**
     * @var array <p>分组名称列表</p>
     */
    public $GroupIds;

    /**
     * @param integer $Total <p>总数量</p>
     * @param array $GroupIds <p>分组名称列表</p>
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }
    }
}
