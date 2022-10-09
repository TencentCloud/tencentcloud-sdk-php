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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAssetHostTotalCount返回参数结构体
 *
 * @method array getTypes() 获取各项资源数量
system : 资源监控
account: 账号
port: 端口
process: 进程
app: 应用软件
database:数据库
webapp: Web应用
webframe: Web框架
webservice: Web服务
weblocation: Web站点
systempackage: 系统安装包
jar: jar包
initservice:启动服务
env: 环境变量
coremodule: 内核模块
 * @method void setTypes(array $Types) 设置各项资源数量
system : 资源监控
account: 账号
port: 端口
process: 进程
app: 应用软件
database:数据库
webapp: Web应用
webframe: Web框架
webservice: Web服务
weblocation: Web站点
systempackage: 系统安装包
jar: jar包
initservice:启动服务
env: 环境变量
coremodule: 内核模块
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAssetHostTotalCountResponse extends AbstractModel
{
    /**
     * @var array 各项资源数量
system : 资源监控
account: 账号
port: 端口
process: 进程
app: 应用软件
database:数据库
webapp: Web应用
webframe: Web框架
webservice: Web服务
weblocation: Web站点
systempackage: 系统安装包
jar: jar包
initservice:启动服务
env: 环境变量
coremodule: 内核模块
     */
    public $Types;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Types 各项资源数量
system : 资源监控
account: 账号
port: 端口
process: 进程
app: 应用软件
database:数据库
webapp: Web应用
webframe: Web框架
webservice: Web服务
weblocation: Web站点
systempackage: 系统安装包
jar: jar包
initservice:启动服务
env: 环境变量
coremodule: 内核模块
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
        if (array_key_exists("Types",$param) and $param["Types"] !== null) {
            $this->Types = [];
            foreach ($param["Types"] as $key => $value){
                $obj = new AssetKeyVal();
                $obj->deserialize($value);
                array_push($this->Types, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
