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
namespace TencentCloud\Chdfs\V20201112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFileSystems返回参数结构体
 *
 * @method array getFileSystems() 获取文件系统列表
 * @method void setFileSystems(array $FileSystems) 设置文件系统列表
 * @method boolean getIsOver() 获取标识是否已获取全量
 * @method void setIsOver(boolean $IsOver) 设置标识是否已获取全量
 * @method string getNextFileSystemIdMarker() 获取下一次请求起始文件系统ID标记
 * @method void setNextFileSystemIdMarker(string $NextFileSystemIdMarker) 设置下一次请求起始文件系统ID标记
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeFileSystemsResponse extends AbstractModel
{
    /**
     * @var array 文件系统列表
     */
    public $FileSystems;

    /**
     * @var boolean 标识是否已获取全量
     */
    public $IsOver;

    /**
     * @var string 下一次请求起始文件系统ID标记
     */
    public $NextFileSystemIdMarker;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $FileSystems 文件系统列表
     * @param boolean $IsOver 标识是否已获取全量
     * @param string $NextFileSystemIdMarker 下一次请求起始文件系统ID标记
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
        if (array_key_exists("FileSystems",$param) and $param["FileSystems"] !== null) {
            $this->FileSystems = [];
            foreach ($param["FileSystems"] as $key => $value){
                $obj = new FileSystem();
                $obj->deserialize($value);
                array_push($this->FileSystems, $obj);
            }
        }

        if (array_key_exists("IsOver",$param) and $param["IsOver"] !== null) {
            $this->IsOver = $param["IsOver"];
        }

        if (array_key_exists("NextFileSystemIdMarker",$param) and $param["NextFileSystemIdMarker"] !== null) {
            $this->NextFileSystemIdMarker = $param["NextFileSystemIdMarker"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
