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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAssetTypeTop返回参数结构体
 *
 * @method array getUser() 获取账号Top5
 * @method void setUser(array $User) 设置账号Top5
 * @method array getPort() 获取端口Top5
 * @method void setPort(array $Port) 设置端口Top5
 * @method array getProcess() 获取进程Top5
 * @method void setProcess(array $Process) 设置进程Top5
 * @method array getSoftware() 获取软件Top5
 * @method void setSoftware(array $Software) 设置软件Top5
 * @method array getDatabase() 获取数据库Top5
 * @method void setDatabase(array $Database) 设置数据库Top5
 * @method array getWebApp() 获取Web应用Top5
 * @method void setWebApp(array $WebApp) 设置Web应用Top5
 * @method array getWebLocation() 获取Web站点Top5
 * @method void setWebLocation(array $WebLocation) 设置Web站点Top5
 * @method array getWebFrame() 获取Web框架Top5
 * @method void setWebFrame(array $WebFrame) 设置Web框架Top5
 * @method array getWebService() 获取Web服务Top5
 * @method void setWebService(array $WebService) 设置Web服务Top5
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAssetTypeTopResponse extends AbstractModel
{
    /**
     * @var array 账号Top5
     */
    public $User;

    /**
     * @var array 端口Top5
     */
    public $Port;

    /**
     * @var array 进程Top5
     */
    public $Process;

    /**
     * @var array 软件Top5
     */
    public $Software;

    /**
     * @var array 数据库Top5
     */
    public $Database;

    /**
     * @var array Web应用Top5
     */
    public $WebApp;

    /**
     * @var array Web站点Top5
     */
    public $WebLocation;

    /**
     * @var array Web框架Top5
     */
    public $WebFrame;

    /**
     * @var array Web服务Top5
     */
    public $WebService;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $User 账号Top5
     * @param array $Port 端口Top5
     * @param array $Process 进程Top5
     * @param array $Software 软件Top5
     * @param array $Database 数据库Top5
     * @param array $WebApp Web应用Top5
     * @param array $WebLocation Web站点Top5
     * @param array $WebFrame Web框架Top5
     * @param array $WebService Web服务Top5
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = [];
            foreach ($param["User"] as $key => $value){
                $obj = new AssetKeyVal();
                $obj->deserialize($value);
                array_push($this->User, $obj);
            }
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = [];
            foreach ($param["Port"] as $key => $value){
                $obj = new AssetKeyVal();
                $obj->deserialize($value);
                array_push($this->Port, $obj);
            }
        }

        if (array_key_exists("Process",$param) and $param["Process"] !== null) {
            $this->Process = [];
            foreach ($param["Process"] as $key => $value){
                $obj = new AssetKeyVal();
                $obj->deserialize($value);
                array_push($this->Process, $obj);
            }
        }

        if (array_key_exists("Software",$param) and $param["Software"] !== null) {
            $this->Software = [];
            foreach ($param["Software"] as $key => $value){
                $obj = new AssetKeyVal();
                $obj->deserialize($value);
                array_push($this->Software, $obj);
            }
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = [];
            foreach ($param["Database"] as $key => $value){
                $obj = new AssetKeyVal();
                $obj->deserialize($value);
                array_push($this->Database, $obj);
            }
        }

        if (array_key_exists("WebApp",$param) and $param["WebApp"] !== null) {
            $this->WebApp = [];
            foreach ($param["WebApp"] as $key => $value){
                $obj = new AssetKeyVal();
                $obj->deserialize($value);
                array_push($this->WebApp, $obj);
            }
        }

        if (array_key_exists("WebLocation",$param) and $param["WebLocation"] !== null) {
            $this->WebLocation = [];
            foreach ($param["WebLocation"] as $key => $value){
                $obj = new AssetKeyVal();
                $obj->deserialize($value);
                array_push($this->WebLocation, $obj);
            }
        }

        if (array_key_exists("WebFrame",$param) and $param["WebFrame"] !== null) {
            $this->WebFrame = [];
            foreach ($param["WebFrame"] as $key => $value){
                $obj = new AssetKeyVal();
                $obj->deserialize($value);
                array_push($this->WebFrame, $obj);
            }
        }

        if (array_key_exists("WebService",$param) and $param["WebService"] !== null) {
            $this->WebService = [];
            foreach ($param["WebService"] as $key => $value){
                $obj = new AssetKeyVal();
                $obj->deserialize($value);
                array_push($this->WebService, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
