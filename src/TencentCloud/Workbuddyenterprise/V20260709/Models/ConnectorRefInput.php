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
namespace TencentCloud\Workbuddyenterprise\V20260709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 连接器引用入参
 *
 * @method string getConnectorId() 获取connector 主表 ID（雪花 ID 数字串）
 * @method void setConnectorId(string $ConnectorId) 设置connector 主表 ID（雪花 ID 数字串）
 */
class ConnectorRefInput extends AbstractModel
{
    /**
     * @var string connector 主表 ID（雪花 ID 数字串）
     */
    public $ConnectorId;

    /**
     * @param string $ConnectorId connector 主表 ID（雪花 ID 数字串）
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
        if (array_key_exists("ConnectorId",$param) and $param["ConnectorId"] !== null) {
            $this->ConnectorId = $param["ConnectorId"];
        }
    }
}
