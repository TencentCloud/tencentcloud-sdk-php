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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWxCloudBaseRunEnvs请求参数结构体
 *
 * @method string getWxAppId() 获取wx应用Id
 * @method void setWxAppId(string $WxAppId) 设置wx应用Id
 * @method boolean getAllRegions() 获取是否查询全地域
 * @method void setAllRegions(boolean $AllRegions) 设置是否查询全地域
 */
class DescribeWxCloudBaseRunEnvsRequest extends AbstractModel
{
    /**
     * @var string wx应用Id
     */
    public $WxAppId;

    /**
     * @var boolean 是否查询全地域
     */
    public $AllRegions;

    /**
     * @param string $WxAppId wx应用Id
     * @param boolean $AllRegions 是否查询全地域
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
        if (array_key_exists("WxAppId",$param) and $param["WxAppId"] !== null) {
            $this->WxAppId = $param["WxAppId"];
        }

        if (array_key_exists("AllRegions",$param) and $param["AllRegions"] !== null) {
            $this->AllRegions = $param["AllRegions"];
        }
    }
}
