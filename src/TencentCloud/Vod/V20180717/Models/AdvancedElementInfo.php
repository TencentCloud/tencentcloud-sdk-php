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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义主体信息
 *
 * @method string getElementId() 获取<p>主体 ID。</p>
 * @method void setElementId(string $ElementId) 设置<p>主体 ID。</p>
 * @method string getElementInfo() 获取<p>主体信息。</p>
 * @method void setElementInfo(string $ElementInfo) 设置<p>主体信息。</p>
 */
class AdvancedElementInfo extends AbstractModel
{
    /**
     * @var string <p>主体 ID。</p>
     */
    public $ElementId;

    /**
     * @var string <p>主体信息。</p>
     */
    public $ElementInfo;

    /**
     * @param string $ElementId <p>主体 ID。</p>
     * @param string $ElementInfo <p>主体信息。</p>
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
        if (array_key_exists("ElementId",$param) and $param["ElementId"] !== null) {
            $this->ElementId = $param["ElementId"];
        }

        if (array_key_exists("ElementInfo",$param) and $param["ElementInfo"] !== null) {
            $this->ElementInfo = $param["ElementInfo"];
        }
    }
}
