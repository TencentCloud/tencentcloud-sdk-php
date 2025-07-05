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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFolder返回参数结构体
 *
 * @method string getFolderId() 获取folder id
 * @method void setFolderId(string $FolderId) 设置folder id
 * @method string getFolderName() 获取folder name
 * @method void setFolderName(string $FolderName) 设置folder name
 * @method string getParentId() 获取父文件夹id
 * @method void setParentId(string $ParentId) 设置父文件夹id
 * @method integer getFolderType() 获取文件夹类型
 * @method void setFolderType(integer $FolderType) 设置文件夹类型
 * @method string getWorkSpaceId() 获取workspace id
 * @method void setWorkSpaceId(string $WorkSpaceId) 设置workspace id
 * @method array getSubFolderInfo() 获取子文件夹信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubFolderInfo(array $SubFolderInfo) 设置子文件夹信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeFolderResponse extends AbstractModel
{
    /**
     * @var string folder id
     */
    public $FolderId;

    /**
     * @var string folder name
     */
    public $FolderName;

    /**
     * @var string 父文件夹id
     */
    public $ParentId;

    /**
     * @var integer 文件夹类型
     */
    public $FolderType;

    /**
     * @var string workspace id
     */
    public $WorkSpaceId;

    /**
     * @var array 子文件夹信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubFolderInfo;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $FolderId folder id
     * @param string $FolderName folder name
     * @param string $ParentId 父文件夹id
     * @param integer $FolderType 文件夹类型
     * @param string $WorkSpaceId workspace id
     * @param array $SubFolderInfo 子文件夹信息
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("FolderType",$param) and $param["FolderType"] !== null) {
            $this->FolderType = $param["FolderType"];
        }

        if (array_key_exists("WorkSpaceId",$param) and $param["WorkSpaceId"] !== null) {
            $this->WorkSpaceId = $param["WorkSpaceId"];
        }

        if (array_key_exists("SubFolderInfo",$param) and $param["SubFolderInfo"] !== null) {
            $this->SubFolderInfo = [];
            foreach ($param["SubFolderInfo"] as $key => $value){
                $obj = new SubFolderInfo();
                $obj->deserialize($value);
                array_push($this->SubFolderInfo, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
