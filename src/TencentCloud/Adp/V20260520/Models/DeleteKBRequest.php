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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteKB请求参数结构体
 *
 * @method string getKbId() 获取<p>知识库 ID</p>
 * @method void setKbId(string $KbId) 设置<p>知识库 ID</p>
 * @method string getSpaceId() 获取<p>工作空间 ID</p>
 * @method void setSpaceId(string $SpaceId) 设置<p>工作空间 ID</p>
 */
class DeleteKBRequest extends AbstractModel
{
    /**
     * @var string <p>知识库 ID</p>
     */
    public $KbId;

    /**
     * @var string <p>工作空间 ID</p>
     */
    public $SpaceId;

    /**
     * @param string $KbId <p>知识库 ID</p>
     * @param string $SpaceId <p>工作空间 ID</p>
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
        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }
    }
}
