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
 * 应用引用的共享知识库简要信息(查询时仅返回ID和名称)
 *
 * @method string getKbId() 获取共享知识库ID
 * @method void setKbId(string $KbId) 设置共享知识库ID
 * @method string getKbName() 获取共享知识库名称
 * @method void setKbName(string $KbName) 设置共享知识库名称
 */
class AppSharedKbInfo extends AbstractModel
{
    /**
     * @var string 共享知识库ID
     */
    public $KbId;

    /**
     * @var string 共享知识库名称
     */
    public $KbName;

    /**
     * @param string $KbId 共享知识库ID
     * @param string $KbName 共享知识库名称
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

        if (array_key_exists("KbName",$param) and $param["KbName"] !== null) {
            $this->KbName = $param["KbName"];
        }
    }
}
