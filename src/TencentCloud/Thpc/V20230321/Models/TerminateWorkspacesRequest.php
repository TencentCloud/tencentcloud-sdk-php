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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TerminateWorkspaces请求参数结构体
 *
 * @method array getSpaceIds() 获取工作空间ID
 * @method void setSpaceIds(array $SpaceIds) 设置工作空间ID
 * @method boolean getReleasePrepaidDataDisks() 获取释放空间挂载的包年包月数据盘。true表示销毁空间同时释放包年包月数据盘，false表示只销毁空间。
 * @method void setReleasePrepaidDataDisks(boolean $ReleasePrepaidDataDisks) 设置释放空间挂载的包年包月数据盘。true表示销毁空间同时释放包年包月数据盘，false表示只销毁空间。
 */
class TerminateWorkspacesRequest extends AbstractModel
{
    /**
     * @var array 工作空间ID
     */
    public $SpaceIds;

    /**
     * @var boolean 释放空间挂载的包年包月数据盘。true表示销毁空间同时释放包年包月数据盘，false表示只销毁空间。
     */
    public $ReleasePrepaidDataDisks;

    /**
     * @param array $SpaceIds 工作空间ID
     * @param boolean $ReleasePrepaidDataDisks 释放空间挂载的包年包月数据盘。true表示销毁空间同时释放包年包月数据盘，false表示只销毁空间。
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
        if (array_key_exists("SpaceIds",$param) and $param["SpaceIds"] !== null) {
            $this->SpaceIds = $param["SpaceIds"];
        }

        if (array_key_exists("ReleasePrepaidDataDisks",$param) and $param["ReleasePrepaidDataDisks"] !== null) {
            $this->ReleasePrepaidDataDisks = $param["ReleasePrepaidDataDisks"];
        }
    }
}
