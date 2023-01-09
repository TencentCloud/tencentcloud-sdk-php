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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实时会话访问来源详情。
 *
 * @method string getIp() 获取访问来源。
 * @method void setIp(string $Ip) 设置访问来源。
 * @method string getActiveConn() 获取当前访问来源活跃连接数
 * @method void setActiveConn(string $ActiveConn) 设置当前访问来源活跃连接数
 * @method integer getAllConn() 获取当前访问来源总连接数
 * @method void setAllConn(integer $AllConn) 设置当前访问来源总连接数
 */
class SessionItem extends AbstractModel
{
    /**
     * @var string 访问来源。
     */
    public $Ip;

    /**
     * @var string 当前访问来源活跃连接数
     */
    public $ActiveConn;

    /**
     * @var integer 当前访问来源总连接数
     */
    public $AllConn;

    /**
     * @param string $Ip 访问来源。
     * @param string $ActiveConn 当前访问来源活跃连接数
     * @param integer $AllConn 当前访问来源总连接数
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
    }
}
