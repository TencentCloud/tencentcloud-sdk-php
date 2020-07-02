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
 * JoinGameServerSession请求参数结构体
 *
 * @method string getGameServerSessionId() 获取游戏服务器会话ID
 * @method void setGameServerSessionId(string $GameServerSessionId) 设置游戏服务器会话ID
 * @method string getPlayerId() 获取玩家ID
 * @method void setPlayerId(string $PlayerId) 设置玩家ID
 * @method string getPlayerData() 获取玩家自定义信息
 * @method void setPlayerData(string $PlayerData) 设置玩家自定义信息
 */
class JoinGameServerSessionRequest extends AbstractModel
{
    /**
     * @var string 游戏服务器会话ID
     */
    public $GameServerSessionId;

    /**
     * @var string 玩家ID
     */
    public $PlayerId;

    /**
     * @var string 玩家自定义信息
     */
    public $PlayerData;

    /**
     * @param string $GameServerSessionId 游戏服务器会话ID
     * @param string $PlayerId 玩家ID
     * @param string $PlayerData 玩家自定义信息
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
        if (array_key_exists('GameServerSessionId',$param) and $param['GameServerSessionId'] !== null) {
            $this->GameServerSessionId = $param['GameServerSessionId'];
        }

        if (array_key_exists('PlayerId',$param) and $param['PlayerId'] !== null) {
            $this->PlayerId = $param['PlayerId'];
        }

        if (array_key_exists('PlayerData',$param) and $param['PlayerData'] !== null) {
            $this->PlayerData = $param['PlayerData'];
        }
    }
}
