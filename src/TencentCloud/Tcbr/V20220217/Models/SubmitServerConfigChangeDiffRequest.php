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
namespace TencentCloud\Tcbr\V20220217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitServerConfigChangeDiff请求参数结构体
 *
 * @method string getEnvId() 获取环境Id
 * @method void setEnvId(string $EnvId) 设置环境Id
 * @method string getServerName() 获取服务名
 * @method void setServerName(string $ServerName) 设置服务名
 * @method ServerBaseConfigDiff getConf() 获取配置信息 deprecated
 * @method void setConf(ServerBaseConfigDiff $Conf) 设置配置信息 deprecated
 * @method array getItems() 获取配置信息
 * @method void setItems(array $Items) 设置配置信息
 */
class SubmitServerConfigChangeDiffRequest extends AbstractModel
{
    /**
     * @var string 环境Id
     */
    public $EnvId;

    /**
     * @var string 服务名
     */
    public $ServerName;

    /**
     * @var ServerBaseConfigDiff 配置信息 deprecated
     */
    public $Conf;

    /**
     * @var array 配置信息
     */
    public $Items;

    /**
     * @param string $EnvId 环境Id
     * @param string $ServerName 服务名
     * @param ServerBaseConfigDiff $Conf 配置信息 deprecated
     * @param array $Items 配置信息
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("ServerName",$param) and $param["ServerName"] !== null) {
            $this->ServerName = $param["ServerName"];
        }

        if (array_key_exists("Conf",$param) and $param["Conf"] !== null) {
            $this->Conf = new ServerBaseConfigDiff();
            $this->Conf->deserialize($param["Conf"]);
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new DiffConfigItem();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
