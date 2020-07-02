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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePlayerSessions返回参数结构体
 *
 * @method array getPlayerSessions() 获取玩家会话列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlayerSessions(array $PlayerSessions) 设置玩家会话列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNextToken() 获取页偏移
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNextToken(string $NextToken) 设置页偏移
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePlayerSessionsResponse extends AbstractModel
{
    /**
     * @var array 玩家会话列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PlayerSessions;

    /**
     * @var string 页偏移
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NextToken;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $PlayerSessions 玩家会话列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NextToken 页偏移
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists('PlayerSessions',$param) and $param['PlayerSessions'] !== null) {
            $this->PlayerSessions = [];
            foreach ($param['PlayerSessions'] as $key => $value){
                $obj = new PlayerSession();
                $obj->deserialize($value);
                array_push($this->PlayerSessions, $obj);
            }
        }

        if (array_key_exists('NextToken',$param) and $param['NextToken'] !== null) {
            $this->NextToken = $param['NextToken'];
        }

        if (array_key_exists('RequestId',$param) and $param['RequestId'] !== null) {
            $this->RequestId = $param['RequestId'];
        }
    }
}
