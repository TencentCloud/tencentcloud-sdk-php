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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstancesCount请求参数结构体
 *
 * @method string getGameId() 获取游戏ID
 * @method void setGameId(string $GameId) 设置游戏ID
 * @method string getGroupId() 获取实例分组ID
 * @method void setGroupId(string $GroupId) 设置实例分组ID
 * @method string getGameRegion() 获取游戏区域
 * @method void setGameRegion(string $GameRegion) 设置游戏区域
 * @method string getGameType() 获取游戏类型。
MOBILE：手游
PC：默认值，端游
 * @method void setGameType(string $GameType) 设置游戏类型。
MOBILE：手游
PC：默认值，端游
 */
class DescribeInstancesCountRequest extends AbstractModel
{
    /**
     * @var string 游戏ID
     */
    public $GameId;

    /**
     * @var string 实例分组ID
     */
    public $GroupId;

    /**
     * @var string 游戏区域
     */
    public $GameRegion;

    /**
     * @var string 游戏类型。
MOBILE：手游
PC：默认值，端游
     */
    public $GameType;

    /**
     * @param string $GameId 游戏ID
     * @param string $GroupId 实例分组ID
     * @param string $GameRegion 游戏区域
     * @param string $GameType 游戏类型。
MOBILE：手游
PC：默认值，端游
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
        if (array_key_exists("GameId",$param) and $param["GameId"] !== null) {
            $this->GameId = $param["GameId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GameRegion",$param) and $param["GameRegion"] !== null) {
            $this->GameRegion = $param["GameRegion"];
        }

        if (array_key_exists("GameType",$param) and $param["GameType"] !== null) {
            $this->GameType = $param["GameType"];
        }
    }
}
