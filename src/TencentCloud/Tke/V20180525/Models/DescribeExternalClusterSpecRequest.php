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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeExternalClusterSpec请求参数结构体
 *
 * @method string getClusterId() 获取注册集群ID
 * @method void setClusterId(string $ClusterId) 设置注册集群ID
 * @method boolean getIsExtranet() 获取默认false 获取内网，是否获取外网版注册命令
 * @method void setIsExtranet(boolean $IsExtranet) 设置默认false 获取内网，是否获取外网版注册命令
 * @method boolean getIsRefreshExpirationTime() 获取默认false 不刷新有效时间 ，true刷新有效时间
 * @method void setIsRefreshExpirationTime(boolean $IsRefreshExpirationTime) 设置默认false 不刷新有效时间 ，true刷新有效时间
 */
class DescribeExternalClusterSpecRequest extends AbstractModel
{
    /**
     * @var string 注册集群ID
     */
    public $ClusterId;

    /**
     * @var boolean 默认false 获取内网，是否获取外网版注册命令
     */
    public $IsExtranet;

    /**
     * @var boolean 默认false 不刷新有效时间 ，true刷新有效时间
     */
    public $IsRefreshExpirationTime;

    /**
     * @param string $ClusterId 注册集群ID
     * @param boolean $IsExtranet 默认false 获取内网，是否获取外网版注册命令
     * @param boolean $IsRefreshExpirationTime 默认false 不刷新有效时间 ，true刷新有效时间
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("IsExtranet",$param) and $param["IsExtranet"] !== null) {
            $this->IsExtranet = $param["IsExtranet"];
        }

        if (array_key_exists("IsRefreshExpirationTime",$param) and $param["IsRefreshExpirationTime"] !== null) {
            $this->IsRefreshExpirationTime = $param["IsRefreshExpirationTime"];
        }
    }
}
