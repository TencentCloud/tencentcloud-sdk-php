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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实时会话访问来源详情。
 *
 * @method string getIp() 获取<p>访问来源。</p>
 * @method void setIp(string $Ip) 设置<p>访问来源。</p>
 * @method string getActiveConn() 获取<p>当前访问来源活跃连接数</p>
 * @method void setActiveConn(string $ActiveConn) 设置<p>当前访问来源活跃连接数</p>
 * @method integer getAllConn() 获取<p>当前访问来源总连接数</p>
 * @method void setAllConn(integer $AllConn) 设置<p>当前访问来源总连接数</p>
 * @method boolean getIsInternalIp() 获取<p>是否为内网ip</p>
 * @method void setIsInternalIp(boolean $IsInternalIp) 设置<p>是否为内网ip</p>
 */
class SessionItem extends AbstractModel
{
    /**
     * @var string <p>访问来源。</p>
     */
    public $Ip;

    /**
     * @var string <p>当前访问来源活跃连接数</p>
     */
    public $ActiveConn;

    /**
     * @var integer <p>当前访问来源总连接数</p>
     */
    public $AllConn;

    /**
     * @var boolean <p>是否为内网ip</p>
     */
    public $IsInternalIp;

    /**
     * @param string $Ip <p>访问来源。</p>
     * @param string $ActiveConn <p>当前访问来源活跃连接数</p>
     * @param integer $AllConn <p>当前访问来源总连接数</p>
     * @param boolean $IsInternalIp <p>是否为内网ip</p>
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("ActiveConn",$param) and $param["ActiveConn"] !== null) {
            $this->ActiveConn = $param["ActiveConn"];
        }

        if (array_key_exists("AllConn",$param) and $param["AllConn"] !== null) {
            $this->AllConn = $param["AllConn"];
        }

        if (array_key_exists("IsInternalIp",$param) and $param["IsInternalIp"] !== null) {
            $this->IsInternalIp = $param["IsInternalIp"];
        }
    }
}
