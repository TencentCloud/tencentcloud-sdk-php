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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getIp() 获取节点 ip。
 * @method void setIp(string $Ip) 设置节点 ip。
 * @method string getPlatform() 获取是否为腾讯云 CDN 加速节点。yes 表示该节点为腾讯云 CDN 节点，no 表示该节点不是腾讯云 CDN 节点。
 * @method void setPlatform(string $Platform) 设置是否为腾讯云 CDN 加速节点。yes 表示该节点为腾讯云 CDN 节点，no 表示该节点不是腾讯云 CDN 节点。
 * @method string getLocation() 获取表示该节点所处的省份/国家。unknown 表示节点位置未知。
 * @method void setLocation(string $Location) 设置表示该节点所处的省份/国家。unknown 表示节点位置未知。
 * @method array getHistory() 获取节点上下线历史记录。
 * @method void setHistory(array $History) 设置节点上下线历史记录。
 * @method string getArea() 获取节点的服务地域。mainland 表示服务地域为中国境内，overseas 表示服务地域为中国境外， unknown 表示服务地域未知。
 * @method void setArea(string $Area) 设置节点的服务地域。mainland 表示服务地域为中国境内，overseas 表示服务地域为中国境外， unknown 表示服务地域未知。
 */

/**
 *CdnIp 属性详情。
 */
class CdnIp extends AbstractModel
{
    /**
     * @var string 节点 ip。
     */
    public $Ip;

    /**
     * @var string 是否为腾讯云 CDN 加速节点。yes 表示该节点为腾讯云 CDN 节点，no 表示该节点不是腾讯云 CDN 节点。
     */
    public $Platform;

    /**
     * @var string 表示该节点所处的省份/国家。unknown 表示节点位置未知。
     */
    public $Location;

    /**
     * @var array 节点上下线历史记录。
     */
    public $History;

    /**
     * @var string 节点的服务地域。mainland 表示服务地域为中国境内，overseas 表示服务地域为中国境外， unknown 表示服务地域未知。
     */
    public $Area;
    /**
     * @param string $Ip 节点 ip。
     * @param string $Platform 是否为腾讯云 CDN 加速节点。yes 表示该节点为腾讯云 CDN 节点，no 表示该节点不是腾讯云 CDN 节点。
     * @param string $Location 表示该节点所处的省份/国家。unknown 表示节点位置未知。
     * @param array $History 节点上下线历史记录。
     * @param string $Area 节点的服务地域。mainland 表示服务地域为中国境内，overseas 表示服务地域为中国境外， unknown 表示服务地域未知。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("History",$param) and $param["History"] !== null) {
            $this->History = [];
            foreach ($param["History"] as $key => $value){
                $obj = new CdnIpHistory();
                $obj->deserialize($value);
                array_push($this->History, $obj);
            }
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
