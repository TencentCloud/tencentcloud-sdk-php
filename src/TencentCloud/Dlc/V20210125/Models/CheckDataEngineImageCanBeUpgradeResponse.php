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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckDataEngineImageCanBeUpgrade返回参数结构体
 *
 * @method string getChildImageVersionId() 获取当前大版本下，可升级的集群镜像小版本id
 * @method void setChildImageVersionId(string $ChildImageVersionId) 设置当前大版本下，可升级的集群镜像小版本id
 * @method boolean getIsUpgrade() 获取是否能够升级
 * @method void setIsUpgrade(boolean $IsUpgrade) 设置是否能够升级
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CheckDataEngineImageCanBeUpgradeResponse extends AbstractModel
{
    /**
     * @var string 当前大版本下，可升级的集群镜像小版本id
     */
    public $ChildImageVersionId;

    /**
     * @var boolean 是否能够升级
     */
    public $IsUpgrade;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ChildImageVersionId 当前大版本下，可升级的集群镜像小版本id
     * @param boolean $IsUpgrade 是否能够升级
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
        if (array_key_exists("ChildImageVersionId",$param) and $param["ChildImageVersionId"] !== null) {
            $this->ChildImageVersionId = $param["ChildImageVersionId"];
        }

        if (array_key_exists("IsUpgrade",$param) and $param["IsUpgrade"] !== null) {
            $this->IsUpgrade = $param["IsUpgrade"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
