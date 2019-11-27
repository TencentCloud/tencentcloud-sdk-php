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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getIdlFiles() 获取本次上传校验所有的Idl文件信息列表
 * @method void setIdlFiles(array $IdlFiles) 设置本次上传校验所有的Idl文件信息列表
 * @method integer getTotalCount() 获取读取Idl描述文件后解析出的合法表数量，不包含已经创建的表
 * @method void setTotalCount(integer $TotalCount) 设置读取Idl描述文件后解析出的合法表数量，不包含已经创建的表
 * @method array getTableInfos() 获取读取Idl描述文件后解析出的合法表列表，不包含已经创建的表
 * @method void setTableInfos(array $TableInfos) 设置读取Idl描述文件后解析出的合法表列表，不包含已经创建的表
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */

/**
 *VerifyIdlFiles返回参数结构体
 */
class VerifyIdlFilesResponse extends AbstractModel
{
    /**
     * @var array 本次上传校验所有的Idl文件信息列表
     */
    public $IdlFiles;

    /**
     * @var integer 读取Idl描述文件后解析出的合法表数量，不包含已经创建的表
     */
    public $TotalCount;

    /**
     * @var array 读取Idl描述文件后解析出的合法表列表，不包含已经创建的表
     */
    public $TableInfos;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;
    /**
     * @param array $IdlFiles 本次上传校验所有的Idl文件信息列表
     * @param integer $TotalCount 读取Idl描述文件后解析出的合法表数量，不包含已经创建的表
     * @param array $TableInfos 读取Idl描述文件后解析出的合法表列表，不包含已经创建的表
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("IdlFiles",$param) and $param["IdlFiles"] !== null) {
            $this->IdlFiles = [];
            foreach ($param["IdlFiles"] as $key => $value){
                $obj = new IdlFileInfo();
                $obj->deserialize($value);
                array_push($this->IdlFiles, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TableInfos",$param) and $param["TableInfos"] !== null) {
            $this->TableInfos = [];
            foreach ($param["TableInfos"] as $key => $value){
                $obj = new ParsedTableInfo();
                $obj->deserialize($value);
                array_push($this->TableInfos, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
