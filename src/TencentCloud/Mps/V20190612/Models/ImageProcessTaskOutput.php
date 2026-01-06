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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图片处理结果信息
 *
 * @method string getPath() 获取输出文件的路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPath(string $Path) 设置输出文件的路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskOutputStorage getOutputStorage() 获取输出文件的存储位置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置输出文件的存储位置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSignedUrl() 获取输出文件的URL。
 * @method void setSignedUrl(string $SignedUrl) 设置输出文件的URL。
 * @method string getContent() 获取图生文任务的处理结果。
 * @method void setContent(string $Content) 设置图生文任务的处理结果。
 */
class ImageProcessTaskOutput extends AbstractModel
{
    /**
     * @var string 输出文件的路径。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Path;

    /**
     * @var TaskOutputStorage 输出文件的存储位置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputStorage;

    /**
     * @var string 输出文件的URL。
     */
    public $SignedUrl;

    /**
     * @var string 图生文任务的处理结果。
     */
    public $Content;

    /**
     * @param string $Path 输出文件的路径。
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskOutputStorage $OutputStorage 输出文件的存储位置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SignedUrl 输出文件的URL。
     * @param string $Content 图生文任务的处理结果。
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("SignedUrl",$param) and $param["SignedUrl"] !== null) {
            $this->SignedUrl = $param["SignedUrl"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
