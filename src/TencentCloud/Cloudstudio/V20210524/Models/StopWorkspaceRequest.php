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
namespace TencentCloud\Cloudstudio\V20210524\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StopWorkspace请求参数结构体
 *
 * @method string getSpaceKey() 获取空间标识
 * @method void setSpaceKey(string $SpaceKey) 设置空间标识
 * @method string getCloudStudioSessionTeam() 获取用户所属组
 * @method void setCloudStudioSessionTeam(string $CloudStudioSessionTeam) 设置用户所属组
 * @method string getForce() 获取是否强制终止，true或者false
 * @method void setForce(string $Force) 设置是否强制终止，true或者false
 */
class StopWorkspaceRequest extends AbstractModel
{
    /**
     * @var string 空间标识
     */
    public $SpaceKey;

    /**
     * @var string 用户所属组
     */
    public $CloudStudioSessionTeam;

    /**
     * @var string 是否强制终止，true或者false
     */
    public $Force;

    /**
     * @param string $SpaceKey 空间标识
     * @param string $CloudStudioSessionTeam 用户所属组
     * @param string $Force 是否强制终止，true或者false
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
        if (array_key_exists("SpaceKey",$param) and $param["SpaceKey"] !== null) {
            $this->SpaceKey = $param["SpaceKey"];
        }

        if (array_key_exists("CloudStudioSessionTeam",$param) and $param["CloudStudioSessionTeam"] !== null) {
            $this->CloudStudioSessionTeam = $param["CloudStudioSessionTeam"];
        }

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }
    }
}
