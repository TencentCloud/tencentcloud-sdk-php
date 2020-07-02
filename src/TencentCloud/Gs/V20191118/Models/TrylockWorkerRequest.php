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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TrylockWorker请求参数结构体
 *
 * @method string getUserId() 获取游戏用户ID
 * @method void setUserId(string $UserId) 设置游戏用户ID
 * @method string getGameId() 获取游戏ID
 * @method void setGameId(string $GameId) 设置游戏ID
 * @method string getGameRegion() 获取游戏区域，ap-guangzhou、ap-shanghai、ap-beijing等
 * @method void setGameRegion(string $GameRegion) 设置游戏区域，ap-guangzhou、ap-shanghai、ap-beijing等
 * @method integer getSetNo() 获取资源池编号，1表示共用，2表示测试
 * @method void setSetNo(integer $SetNo) 设置资源池编号，1表示共用，2表示测试
 * @method string getUserIp() 获取游戏用户IP，用于就近调度，例如125.127.178.228
 * @method void setUserIp(string $UserIp) 设置游戏用户IP，用于就近调度，例如125.127.178.228
 */
class TrylockWorkerRequest extends AbstractModel
{
    /**
     * @var string 游戏用户ID
     */
    public $UserId;

    /**
     * @var string 游戏ID
     */
    public $GameId;

    /**
     * @var string 游戏区域，ap-guangzhou、ap-shanghai、ap-beijing等
     */
    public $GameRegion;

    /**
     * @var integer 资源池编号，1表示共用，2表示测试
     */
    public $SetNo;

    /**
     * @var string 游戏用户IP，用于就近调度，例如125.127.178.228
     */
    public $UserIp;

    /**
     * @param string $UserId 游戏用户ID
     * @param string $GameId 游戏ID
     * @param string $GameRegion 游戏区域，ap-guangzhou、ap-shanghai、ap-beijing等
     * @param integer $SetNo 资源池编号，1表示共用，2表示测试
     * @param string $UserIp 游戏用户IP，用于就近调度，例如125.127.178.228
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
        if (array_key_exists('UserId',$param) and $param['UserId'] !== null) {
            $this->UserId = $param['UserId'];
        }

        if (array_key_exists('GameId',$param) and $param['GameId'] !== null) {
            $this->GameId = $param['GameId'];
        }

        if (array_key_exists('GameRegion',$param) and $param['GameRegion'] !== null) {
            $this->GameRegion = $param['GameRegion'];
        }

        if (array_key_exists('SetNo',$param) and $param['SetNo'] !== null) {
            $this->SetNo = $param['SetNo'];
        }

        if (array_key_exists('UserIp',$param) and $param['UserIp'] !== null) {
            $this->UserIp = $param['UserIp'];
        }
    }
}
