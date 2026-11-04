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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFileBackupObjects返回参数结构体
 *
 * @method array getDirList() 获取<p>当前路径下包含的目录信息</p>
 * @method void setDirList(array $DirList) 设置<p>当前路径下包含的目录信息</p>
 * @method array getFileList() 获取<p>当前路径下包含的文件信息</p>
 * @method void setFileList(array $FileList) 设置<p>当前路径下包含的文件信息</p>
 * @method integer getTotalCount() 获取<p>当前路径下包含的目录及文件总数</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>当前路径下包含的目录及文件总数</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeFileBackupObjectsResponse extends AbstractModel
{
    /**
     * @var array <p>当前路径下包含的目录信息</p>
     */
    public $DirList;

    /**
     * @var array <p>当前路径下包含的文件信息</p>
     */
    public $FileList;

    /**
     * @var integer <p>当前路径下包含的目录及文件总数</p>
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $DirList <p>当前路径下包含的目录信息</p>
     * @param array $FileList <p>当前路径下包含的文件信息</p>
     * @param integer $TotalCount <p>当前路径下包含的目录及文件总数</p>
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
        if (array_key_exists("DirList",$param) and $param["DirList"] !== null) {
            $this->DirList = [];
            foreach ($param["DirList"] as $key => $value){
                $obj = new FileInfo();
                $obj->deserialize($value);
                array_push($this->DirList, $obj);
            }
        }

        if (array_key_exists("FileList",$param) and $param["FileList"] !== null) {
            $this->FileList = [];
            foreach ($param["FileList"] as $key => $value){
                $obj = new FileInfo();
                $obj->deserialize($value);
                array_push($this->FileList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
